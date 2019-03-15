<?php

namespace App\Http\Controllers\Backoffice;

use Validator;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.Categories.index', ['categories' => $categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Categories.create');

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
                'name' => 'required|max:255'

            ], [
                'name.required' => 'Le nom de la Catégorie est obligatoire',
                'name.max:255' => 'Le champs ne doit pas depasser 255 caractères'
            ]);



        $category = new Category();
        $category->name = $request->input('name');
        $category->save();


        $categories = Category::all();
        return view('admin.Categories.index', ['cats' => $categories,
            'AddCat' => 'la catégorie ' . $request->input('name') . ' est enregistrée avec success.'

        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {


        return view('admin.Categories.edit', ['category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $label = $category->name;

        $request->validate([
            'name' => 'required|max:255'

        ], [
            'name.required' => 'Le nom de la Catégorie est obligatoire',
            'name.max:255' => 'Le champs ne doit pas depasser 255 caractères'
        ]);

        $category->name = $request->input('name');
        $category->save();


        $categories = Category::all();
        return view('admin.Categories.index', ['categories' => $categories, 'updateCat' => 'la catégorie ' . $label . " est modifiée avec succes."]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        //grab from Model ... nite !

        if (!is_null($category)) {
            $label = $category->name;
            try {
                $category->delete();
            } catch (\Illuminate\Database\QueryException $e) {
                $categories = Category::all();
                return view('admin.Categories.index', ['categories' => $categories, 'errorsConstraint' => 'l\'enregistrement est lié à au moins un produit. Vous ne pouvez pas supprimer cette catégorie.']);
            }
            $categories = Category::all();
            return view('admin.Categories.index', ['categories' => $categories, 'supprCat' => 'la catégorie ' . $label . " est supprimée de la base de données."]);

        } else {

            $categories = Category::all();
            return view('admin.Categories.index', ['categories' => $categories]);
        }
    }
}
