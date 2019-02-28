<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class NewLetterController extends Controller
{
    public function show(){
        return view('newLetter.show');
    }
}
