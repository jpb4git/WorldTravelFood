<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function login()
    {
        return view('pages.user.login', ['title' => 'Authentification']);
    }

    public function account()
    {
        return view ('user.account');
    }

    public function orders()
    {
        return view('user.orders');
    }

    public function addresses()
    {
        return view ('user.addresses');
    }
}
