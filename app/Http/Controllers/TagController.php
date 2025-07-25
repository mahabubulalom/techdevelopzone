<?php
namespace App\Http\Controllers;
use App\Models\BlogTag;
use App\Models\tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{


    function tag(){
        $tags = Tag::all();
        return view('backend.tag.tag' ,[
            'tags'=>$tags,
        ]);
    }
    function blogtags_store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255|unique:blog_tags,name',
        ]);

        // $slug = Str::lower(str_replace(' ', '-', $request->name)) . '-' . random_int(10000000, 999999999);

        BlogTag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return back()->with('blogtag success', 'BlogTag added successfully!');
    }


    function tag_stor(Request $request){
        $request->validate([
            'tag_name'=>'required|unique:tags',
        ]);

        $slug = Str::lower(str_replace(' ', '-', $request->tag_name)) . '-' . random_int(10000000, 999999999);

        tag::insert([
            'tag_name'=>$request->tag_name,
            'tag_slug'=>$slug,
            'created_at'=>Carbon::now(),
        ]);

        return back()->with('success', 'Tag added successfuly');

    }

            // delete tag.delete

    function tag_delete($id){
        tag::find($id)->delete();


        return back()->with('deleted', 'Tag deleted successfully.');

    }

}
