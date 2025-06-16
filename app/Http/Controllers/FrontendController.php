<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function welcome(){
        return view('welcome');
    }

    function  home(){
        return view('home');
    }
    function blog_show(){
        return view('frontend.blog.show');
    }
    function blogs(){
        return view('frontend.blog.blogs');
    }
    function contact(){
        return view('frontend.contact.contact');
    }
    function  dashboard(){
        return view('dashboard');
    }
}
