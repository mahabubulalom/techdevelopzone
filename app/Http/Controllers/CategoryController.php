<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller

{

    function category(){
        $categories = Category::all();
        return view('backend.category.category',compact('categories'));
    }



    // add category

    public function category_add(Request $request)
    {

        $request->validate([
            'category_name' => 'required|string|max:255',
            // 'category_description' => 'required|string',
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name),
            // 'category_description' => $request->category_description,
            'created_add' => now(),
        ]);

        return back()->with('success', 'Category created successfully.');
    }



    // delete category

    function category_delete($id){
        category::find($id)->delete();


        return back()->with('deleted', 'Category deleted successfully.');

    }

}
