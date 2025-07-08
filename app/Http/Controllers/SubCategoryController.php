<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    function subcategory(){
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('backend.category.subcategory' ,[
            'categories'=> $categories,
            'subcategories'=> $subcategories,
        ]);
    }


    function subcategory_add(Request $request){
        $request->validate([
            'category_id'=>'required',
            'subcategory_name'=>'required',
        ],[
            'category_id.required'=>'Category name field is required'
        ]);

        if(Subcategory::where('category_id', $request->category_id)->where('subcategory_name', $request->subcategory_name)->exists()){
            return back()->with('exists', 'This SubCategory Name Already Exists In.');
        }else{
            Subcategory::insert([
                'category_id' => $request->category_id,
                'subcategory_name' => $request->subcategory_name,
                'subcategory_slug' => Str::slug($request->subcategory_name),
                'created_at' => Carbon::now(),
                // 'created_add' => now(),
            ]);

            return back()->with('success', 'SubCategory created successfully.');
        }




    }



        // delete subcategory

    function subcategory_delete($id){
        subcategory::find($id)->delete();


        return back()->with('deleted', 'SubCategory deleted successfully.');

    }


}
