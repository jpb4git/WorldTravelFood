<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function login()
    {
        return view('pages.user.login', ['title' => 'Authentification']);
    }

    public function account()
    {
        $user = Auth::user();
        return view ('user.account', ['user' => $user]);
    }

    public function orders()
    {
        $user = Auth::user();
        $user->load('orders');
        return view('user.orders', ['user' => $user]);
    }

    public function addresses()
    {
        $user = Auth::user();
        $user->load('addresses');
        return view ('user.addresses', ['user' => $user]);
    }

    /*
    public function addressesupdate(Request $request)
    {

        $user = Auth::user();
        DB::table('addresses')->where('user_id', $user->id)->update(
            ['street' => $request->input('street')],
            ['zip_code' => $request->input('zip_code')],
            ['complement' => $request->input('complement')],
            ['city' => $request->input('city')],
            ['country' => $request->input('country')],
            ['last_name' => $request->input('last_name')],
            ['first_name' => $request->input('first_name')],
            ['wording' => $request->input('wording')]
             );
        $user->load('addresses');
        return view ('user.addresses', ['user' => $user]);
    }
    */
}
