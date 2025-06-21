<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function products(){
        return view('frontend.product.products');
    }
    function add_products(){
        return view('backend.product.add_product');
    }
}
