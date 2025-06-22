<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function products(){
        return view('frontend.product.products');
    }
    function add_products(){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('backend.product.add_product' ,[
            'categories'=> $categories,
            'subcategories'=> $subcategories,
        ]);
    }

    function getsubcategory(Request $request){
        $subcategories = Subcategory::where('category_id', $request->category_id)->get();
        $sub = '<option value=">Select SubCategory</option>';
        foreach($subcategories as $subcategory){
            $sub .= '<option value="'.$subcategory->id.'">'.$subcategory->subcategory_name.'</option>';
        }

        echo $sub;
    }
}
