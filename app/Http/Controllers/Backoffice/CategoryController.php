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

        return view('admin.Categories.showAll',['cats'=>$categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Categories.formulaireCat');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('admin/cat/create')
                ->withErrors($validator)
                ->withInput();
        }

       $cat = new Category();
       $cat->name = $request->input('name');
       $cat->save();


       $categories = Category::all();
       return view('admin.Categories.showAll',['cats'=>$categories,
           'AddCat'=>'la catégorie '.$request->input('name'). ' est enregistrée avec success.'

       ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //grab from Model ... nite !
        $cat = Category::find($id);

        $label = $cat->name;
        try {
            $cat->delete();

        } catch (\Illuminate\Database\QueryException $e) {

            $categories = Category::all();
            return view('admin.Categories.showAll',['cats'=>$categories,
                'errorsConstraint'=>'l\'enregistrement est lié à au moins un produit. Vous ne pouvez pas supprimer cette catégorie.']);
        }








        $categories = Category::all();
        return view('admin.Categories.showAll',['cats'=>$categories,
            'supprCat'=>'la catégorie ' . $label . " est supprimée de la base de données."
        ]);
    }
}
