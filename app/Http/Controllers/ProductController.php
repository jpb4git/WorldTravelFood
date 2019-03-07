<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;
class ProductController extends Controller
{
    //

    public function showAll()
    {
        //$products = Product::all();
        //$products = Product::orderBy('nom','ASC')->get();
        $products = Product::orderBy('prix','ASC')->get();

        return view('layouts.product.showAll',['products'=>$products]);
    }

    public function showByCat()
    {
        return  view("layouts.product.showByCat" ,['cat' => 'catalogue']);
    }

    public function showByCountry()
    {
        return  view("layouts.product.showByCountry" ,['name' => 'catalogue']);
    }

    public function getProduct($id)
    {
        $product = Product::where('id',$id)-> get();
        $product=$product[0];
        return view('layouts.product.getProduct', ['product'=>$product]);
    }

    public function index()
    {

    }

}
