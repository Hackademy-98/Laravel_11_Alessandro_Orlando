<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(){
        $poducts = Auth::user()->products;
        return view("auth.home",compact('prducts'));
    }
}
