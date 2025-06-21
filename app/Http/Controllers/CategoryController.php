<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
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
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name),
            'created_at' => Carbon::now(),
            // 'created_add' => now(),
        ]);

        return back()->with('success', 'Category created successfully.');
    }



    // delete category

    function category_delete($id){
        category::find($id)->delete();


        return back()->with('deleted', 'Category deleted successfully.');

    }

}
