<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    function subcategory(){
        $categories = Category::all();
        return view('backend.category.subcategory' ,[
            'categories'=> $categories
        ]);
    }


    // function subcategory_add(){
    //     echo('hello');
    // }

}
