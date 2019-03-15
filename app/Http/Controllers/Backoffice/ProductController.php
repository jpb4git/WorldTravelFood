<?php

namespace App\Http\Controllers\Backoffice;

use File;
use Validator;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 1  [ Eager Loading ]  1 requete au lieu de  requete(n(result) + 1 )
        $products = Product::with('category')->get();

        // [ ou bien
        //   $products = Product::get();
        //   $products->load('category');
        // [ qui fait la même chose

        return view("admin.products.index", ['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::get();

        return view('admin.products.create', ['cats' => $cats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'numeric',
            'file' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048',

        ], [
            'name.required' => 'Le nom de la Catégorie est obligatoire',
            'name.max:255' => 'Le champs ne doit pas depasser 255 caractères',
            'description.required' => 'la description est obligatoire',
            'price.required' => 'le prix est obligatoire',
            'price.numeric' => 'le prix doit être au format numérique',
            'weight.required' => 'le poids est obligatoire',
            'weight.numeric' => 'le poids doit être au format numérique',
            'stock.required' => 'le stock est obligatoire',
            'category.numeric' => 'le produit doit être associé à une catégorie',
            'file.required' => 'la photo du produit  est obligatoire',
            'file.file' => 'le fichier associé doit être du type File',
            'file.image' => 'la photo du produit  doit eêtre du type image',
            'file.mimes' => 'La type du fichier doit être jpeg,png,gif,webp',
            'file.max' => 'la la taille du fichier ne doit pas depasser 2048 kb',

        ]);


        $file = $request->file('file');
        $file->move(public_path('/assets/images/imgcatalogue'), $file->getClientOriginalName());

        $product = new Product();
        $product->name = $request->input('name');
        $label = $product->name;
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->stock = $request->input('stock');
        $product->category_id = $request->input('category');
        $product->image = $file->getClientOriginalName();
        $product->save();

        $products = Product::with('category')->get();
        return view("admin.products.index", ['products' => $products, 'addProd' => 'le produit ' . $label . " est modifié avec succés."]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::get();

        return view('admin.products.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        // si on a un nouveau fichier image pour le produit
        if ($request->file <> null) {
            // validation fichier
            $request->validate(['file' => 'max:2048']);
            //  on cherche l'image actuelle pour destruction
            $image_path = public_path() . "/assets/images/imgcatalogue/" . $product->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            // copie image vers dossier correspondant
            $file = $request->file('file');
            $file->move(public_path('/assets/images/imgcatalogue'), $request->file->getClientOriginalName());
            $product->image = $request->file->getClientOriginalName();

        }


        $request->validate([

            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' => 'numeric',


        ], [
            'name.required' => 'Le nom de la Catégorie est obligatoire',
            'name.max:255' => 'Le champs ne doit pas depasser 255 caractères',
            'description.required' => 'la description est obligatoire',
            'price.required' => 'le prix est obligatoire',
            'price.numeric' => 'le prix doit être au format numérique',
            'weight.required' => 'le poids est obligatoire',
            'weight.numeric' => 'le poids doit être au format numérique',
            'stock.required' => 'le stock est obligatoire',
            'category.numeric' => 'le produit doit être associé à une catégorie',


        ]);


        $product->name = $request->input('name');
        $label = $product->name;
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->stock = $request->input('stock');
        $product->category_id = $request->input('category');
        $product->save();


        $products = Product::with('category')->get();
        return view("admin.products.index", ['products' => $products, 'updateProd' => 'le produit ' . $label . " est modifié avec succés."]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        if (!is_null($product)) {
            $label = $product->name;
            try {
                //suppression produit
                $product->delete();

                //suppression image
                $image_path = public_path() . "/assets/images/imgcatalogue/" . $product->image;  // Value is not URL but directory file path
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            } catch (\Illuminate\Database\QueryException $e) {

                $products = Product::with('category')->get();
                return view('admin.products.index', ['products' => $products, 'errorsConstraint' => 'l\'enregistrement est lié à au moins une commande. Vous ne pouvez pas supprimer cet article.']);
            }

            $products = Product::with('category')->get();
            return view('admin.products.index', ['products' => $products, 'supprProd' => 'le produit ' . $label . " est supprimé de la base de données."]);

        } else {

            $products = Product::with('category')->get();
            return view('admin.products.index', ['products' => $products]);

        }
    }
}
