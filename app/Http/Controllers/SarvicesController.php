<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SarvicesController extends Controller
{
    function sarvices(){
        return view('frontend.sarvices.sarvices');
    }
}
