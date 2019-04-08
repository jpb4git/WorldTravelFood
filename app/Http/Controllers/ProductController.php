<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        return view("product.index", ['products' => $products]);

    }

    public function boissons()
    {
        $products = Product::all();
        return view("product.boissons", ['products' => $products]);
    }

    public function bonbons()
    {
        return view("product.bonbons", ['cat' => 'catalogue']);
    }

    public function snacking()
    {
        return view("product.snacking", ['cat' => 'catalogue']);
    }

    public function aperitif()
    {
        return view("product.aperitif", ['cat' => 'catalogue']);
    }

    public function vegan()
    {
        return view("product.vegan", ['cat' => 'catalogue']);
    }


    public function country()
    {
        return view("product.country", ['name' => 'catalogue']);
    }

    public function show(Product $product)
    {
        return view("product.show", ['product' => $product]);
    }

}
