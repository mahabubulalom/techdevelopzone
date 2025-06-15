<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function admin_paner(){
        return view('backend.dashboard');
    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }



    function home(){
        return view('home');
    }
}
