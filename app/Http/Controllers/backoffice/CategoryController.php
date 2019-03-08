<?php

namespace App\Http\Controllers\backoffice;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //


    public function showAll(){
       $cats =  Category::all();
       return view('layouts.admin.Categories.showAll',['cats'=>  $cats]);
    }


    public function form(){
        return view('layouts.admin.Categories.formulaireCat');

    }

    public function insert(){
        return view('layouts.admin.Categories.formulaireCat');

    }


    public function update(){
      //  return view('layouts.admin.Categories.formulaireCat');

    }

    public function delete(){
       // return view('layouts.admin.Categories.formulaireCat');


    }
}
