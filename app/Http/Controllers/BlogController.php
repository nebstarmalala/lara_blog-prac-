<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
    
        $name = request('name');
        $occupation = request('occupation');
    
        return view('blogs.index', [
            "blogs" => $blogs,
            'name' => $name,
            'occupation' => $occupation
            ]);
    }

    public function show($id){
        $blog = Blog::findOrFail($id);
        return view('blogs.show', ['blog' => $blog]);
    }

    public function create(){
        return view('blogs.create');
    }

    public function store(){
        $blog = new Blog();

        $blog->title = request("title");
        $blog->body = request("body");
        $blog->author = request("author");

        $blog->save();

        return redirect("/")->with('msg', 'Blog created successfully!');
    }

    public function destroy($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect("/blogs");
    }
}
