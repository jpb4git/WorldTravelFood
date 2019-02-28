<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //

    public function showAll()
    {
        return  view("product.showAll" ,['name' => 'catalogue']);
    }

    public function getProduct($id)
    {
        return  view("product.getProduct" ,['name' => 'Home']);
    }

}
