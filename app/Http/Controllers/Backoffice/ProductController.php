<?php

namespace App\Http\Controllers\Backoffice;
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

        return view("admin.products.showAll", ['products' => $products]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::get();

        return view('admin.products.create',['cats' => $cats]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' =>'numeric'
        ]);

        if ($validator->fails()) {
            return redirect('admin/product/create')
                ->withErrors($validator)
                ->withInput();
        }

        $product = new Product();
        $product->name  = $request->input('name');
        $label = $product->name;
        $product->description  = $request->input('description');
        $product->price  = $request->input('price');
        $product->weight  = $request->input('weight');
        $product->stock  = $request->input('stock');
        $product->category_id  = $request->input('category');
        $product->image  = "new-1.jpg";
        $product->save();


        $products = Product::with('category')->get();
        return view("admin.products.showAll", ['products' => $products,'addProd' => 'le produit ' . $label . " est modifié avec succés."]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $cats = Category::get();

        return view('admin.products.edit', ['product' => $product,'cats' => $cats]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product  = Product::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'stock' => 'required|numeric',
            'category' =>'numeric'
        ]);

        if ($validator->fails()) {
            return redirect('admin/product/edit')
                ->withErrors($validator)
                ->withInput();
        }


        $product->name  = $request->input('name');
        $label = $product->name ;
        $product->description  = $request->input('description');
        $product->price  = $request->input('price');
        $product->weight  = $request->input('weight');
        $product->stock  = $request->input('stock');
        $product->category_id  = $request->input('category');
        $product->image  = "new-1.jpg";
        $product->save();


        $products = Product::with('category')->get();
        return view("admin.products.showAll", ['products' => $products,'updateProd' => 'le produit ' . $label . " est modifié avec succés."]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $product = Product::find($id);
        if (!is_null($product)) {
            $label = $product->name;
            try {
                $product->delete();
            } catch (\Illuminate\Database\QueryException $e) {

                $products = Product::with('category')->get();
                return view('admin.products.showAll', ['products' => $products, 'errorsConstraint' => 'l\'enregistrement est lié à au moins une commande. Vous ne pouvez pas supprimer cet article.']);
            }

            $products = Product::with('category')->get();
            return view('admin.products.showAll', ['products' => $products, 'supprProd' => 'le produit ' . $label . " est supprimé de la base de données."]);

        } else {

            $products = Product::with('category')->get();
            return view('admin.products.showAll', ['products' => $products]);

        }
    }
}
