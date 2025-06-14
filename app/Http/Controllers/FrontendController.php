<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function welcome(){
        return view('welcome');
    }
    function layout(){
        return view('layout');
    }
    function  home(){
        return view('home');
    }
    function  videos(){
        return view('videos');
    }
    function  dashboard(){
        return view('dashboard');
    }
}
