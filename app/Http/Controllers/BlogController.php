<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = [
            ["title" => "Laravel for begginers", "author" => "Nebstar Malash"],
            ["title" => "PHP for intermediate", "author" => "Shem ian"],
            ["title" => "Python for Professionals", "author" => "Martin Mato"],
            ["title" => "Ruby for hackers", "author" => "Agusto wafula"],
        ];
    
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
