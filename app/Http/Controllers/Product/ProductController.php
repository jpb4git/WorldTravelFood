<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //

    public function showAll()
    {
        return  view("pages.product.produits" ,['name' => 'catalogue']);
    }

    public function getProduit($id)
    {
        return  view("pages.product.produits" ,['name' => 'Home']);
    }

}
