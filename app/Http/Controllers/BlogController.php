<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Modeld\Blog;

class BlogController extends Controller
{
    public function index(){
        $blogs = Blog::all();
    
        $name = request('name');
        $occupation = request('occupation');
    
        return view('blogs', [
            "blogs" => $blogs,
            'name' => $name,
            'occupation' => $occupation
            ]);
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
