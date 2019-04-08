<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function show(Category $category)
    {
        $category->load('products');

        return view('category.show', ['category' => $category]);
    }
}
