<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('home');
});

Route::get('/features', function () {
    return view('features');
});

Route::get("/blog", function () {
    return view("blog", ["blogs" => Blog::all()]);
});

Route::get("/blog/{blog:slug}", function (Blog $blog) {
    return view("blog-detail", ["blog" => $blog]);
});

Route::get('/contact', function () {
    return view("contact", ["email" => "ridoseptiawan@gmail.com", "fesnuk" => "Rido Septiawan"]);
});
