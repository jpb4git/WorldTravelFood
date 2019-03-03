<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //

    public function showAll()
    {
        return  view("layouts.product.showAll" ,['name' => 'catalogue']);
    }

    public function getProduct()
    {
        return  view("layouts.product.getProduct" ,['name' => 'produit Description']);
    }

}
