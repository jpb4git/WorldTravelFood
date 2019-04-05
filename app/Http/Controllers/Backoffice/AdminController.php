<?php

namespace App\Http\Controllers\Backoffice;

use App\Category;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $productCount = Product::count();
        $catCount = Category::count();
        $userCount = User::count();
        $orderCount = Order::count();

        return view('admin.index', [
            'productCount' => $productCount,
            'catCount' => $catCount,
            'userCount' => $userCount,
            'orderCount' => $orderCount
        ]);
    }
}
