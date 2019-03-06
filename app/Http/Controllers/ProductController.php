<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

    public function showAll()
    {
        $products = DB::select('select * from products ');

        return  view("layouts.product.showAll" ,['title' => 'catalogue' ,'products' => $products]);
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
        $product = DB::select('select * from products WHERE id = :id',[':id' => $id]);
        $product = $product[0];
        //$product = DB::table('products')->where('id',$id);



        return  view("layouts.product.getProduct" ,['name' => 'produit Description','product' => $product]);
    }

}
