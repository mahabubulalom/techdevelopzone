<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\BlogTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Carbon;


class BlogController extends Controller
{

    function blogs(){
        return view('frontend.blog.blogs');
    }

    function blog_show(){
        return view('frontend.blog.show');
    }

    function add_blogs(){
        $blog = blog::all();
        $tags = BlogTag::all();
        return view('backend.blog.add_blog',[
            'blog'=> $blog,
            'tags'=> $tags,
        ]);
    }





    // public function store(Request $request){
    //     $request->validate([
    //         'title' => 'required',
    //         'content' => 'required',
    //         'image' => 'nullable|image|mimes:jpg,png,jpeg|max:1024',
    //     ]);

    //     $imagePath = null;
    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('blogs', 'public');
    //     }

    //     blog::create([
    //         'title' => $request->title,
    //         'slug' => Str::slug($request->title),
    //         'content' => $request->content,
    //         'image' => $imagePath,
    //     ]);

    //     return redirect()->route('blogs.index')->with('success', 'Blog created!');
    // }




    // public function blogs_store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|max:255',
    //         'content' => 'required|string',
    //         'image' => 'required|mimes:jpg,png,jpeg|max:1024',
    //     ]);
    //     // dd($request->all());
    //     // Image Upload
    //     $image = $request->image;
    //     $manager = new ImageManager(new Driver());
    //     $extension = $image->extension();
    //     $img = $manager->read($image);
    //     $file_name = Str::slug($request->title) . '-' . time() . '.' . $extension;

    //     $img->save(public_path('uploads/blog/' . $file_name));


    //     // Slug Generate
    //     $slug = Str::lower(str_replace(' ', '-', $request->title)) . '-' . random_int(10000000, 999999999);

    //     // Insert into Database
    //     Blog::insert([
    //         'title' => $request->title,
    //         'slug' => $slug,
    //         'content' => $request->content,
    //         'image' => $file_name,
    //         'created_at' => Carbon::now(),
    //     ]);

    //     return back()->with('success', 'Blog created successfully!');
    // }

    public function blogs_store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|string',
            'image' => 'required|mimes:jpg,png,jpeg|max:1024',
            'tag_id' => 'required|array', // ensure tag_id array আসছে
        ]);

        // Image Upload
        $image = $request->image;
        $manager = new ImageManager(new Driver());
        $extension = $image->extension();
        $img = $manager->read($image);
        $file_name = Str::slug($request->title) . '-' . time() . '.' . $extension;

        $img->save(public_path('uploads/blog/' . $file_name));

        // Slug Generate
        $slug = Str::lower(str_replace(' ', '-', $request->title)) . '-' . random_int(10000000, 999999999);

        // Create & Save
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = $slug;
        $blog->content = $request->content;
        $blog->image = $file_name;
        $blog->created_at = Carbon::now();
        $blog->save();

        // Attach Tags
        $blog->tags()->attach($request->tag_id);

        return back()->with('success', 'Blog created successfully!');
    }



}
