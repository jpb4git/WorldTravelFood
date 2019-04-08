<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        return view("cart.index");
    }

    public function adresse1()
    {
        return view("cart.adresse1");
    }

    public function adresse2()
    {
        return view("cart.adresse2");
    }

    public function adresseChoix()
    {
        return view("cart.adresseChoix");
    }

    public function shipping()
    {
        return view("cart.shipping");
    }

    public function payment()
    {
        return view("cart.payment");
    }

}
