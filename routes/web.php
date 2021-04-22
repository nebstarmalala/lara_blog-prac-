<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $blogs = [
        ["title" => "Laravel for begginers", "author" => "Nebstar Malash"],
        ["title" => "PHP for intermediate", "author" => "Shem ian"],
        ["title" => "Python for Professionals", "author" => "Martin Mato"],
        ["title" => "Ruby for hackers", "author" => "Agusto wafula"],
    ];

    return view('welcome', ["blogs" => $blogs]);
});
