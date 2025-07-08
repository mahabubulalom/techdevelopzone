<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\products;
use App\Models\Subcategory;
use App\Models\tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProductController extends Controller
{
    function products(){
        return view('frontend.product.products');
    }
    function add_products(){
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $tags = tag::all();
        return view('backend.product.add_product' ,[
            'categories'=> $categories,
            'subcategories'=> $subcategories,
            'tags'=> $tags,
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

    function products_stor(Request $request){
        $request->validate([
            'title'=>'required|max:255',
            'category_id'=>'required',
            'subcategory_id'=>'required',
            'affiliate_link'=>'required',
            'tag_id'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:1024',
        ]);


        $image = $request->image;
        $manager = new ImageManager(new Driver());
        $extension = $image->extension();
        $img = $manager->read($image);
        $file_name = Str::slug($request->title) . '-' . time() . '.' . $extension;



        $img->save(public_path('uploads/product/' . $file_name));


        $after_implode_tag = implode(',', $request->tag_id);
        $slug = Str::lower(str_replace(' ', '-', $request->title)) . '-' . random_int(10000000, 999999999);


        products::insert([
            'title'=>$request->title,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'affiliate_link'=>$request->affiliate_link,
            'tags'=>$after_implode_tag,
            'slug'=>$slug,
            'image'=>$file_name,
            'created_at'=>Carbon::now(),

        ]);


        return back()->with('success', 'Product updated successfully!');
    }

}
