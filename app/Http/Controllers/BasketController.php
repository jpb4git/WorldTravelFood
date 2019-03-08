<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasketController extends Controller
{
    public function index()
    {
        return view("layouts.basket.index");
    }


    public function identification()
    {
        return view("layouts.basket.identification");
    }


    public function createAccount()
    {
        return view("layouts.basket.createAccount");
    }


    public function adresse1()
    {
        return view("layouts.basket.adresse1");
    }

    public function adresse2()
    {
        return view("layouts.basket.adresse2");
    }

    public function adresseChoix()
    {
        return view("layouts.basket.adresseChoix");
    }

    public function fraisDePort()
    {
        return view("layouts.basket.fraisDePort");
    }

    public function paiement()
    {
        return view("layouts.basket.paiement");
    }

}
