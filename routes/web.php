<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/features', function () {
    return view('features');
});

Route::get("/blog", function () {
    $blogs = [
        [
            "id" => 1,
            "slug" => "understanding-blade-template",
            "username" => "Nauval Azhar",
            "title" => "Understanding Blade Template",
            "content" => "Blade is Laravel's built-in templating engine that helps developers create dynamic and reusable views with ease. It allows you to use PHP code directly within your HTML files while keeping the structure clean and readable."
        ],
        [
            "id" => 2,
            "slug" => "learning-basic-laravel",
            "username" => "Rido Septiawan",
            "title" => "Learning Basic Laravel",
            "content" => "Laravel is one of the most popular PHP frameworks used for modern web development. It offers an elegant syntax and a powerful set of tools that make building web applications more efficient and enjoyable."
        ]
    ];

    return view("blog", compact('blogs'));
});

Route::get("/blog/{slug}", function ($slug) {
    $blogs = [
        [
            "id" => 1,
            "slug" => "understanding-blade-template",
            "username" => "Nauval Azhar",
            "title" => "Understanding Blade Template",
            "content" => "Blade is Laravel's built-in templating engine that helps developers create dynamic and reusable views with ease. It allows you to use PHP code directly within your HTML files while keeping the structure clean and readable."
        ],
        [
            "id" => 2,
            "slug" => "learning-basic-laravel",
            "username" => "Rido Septiawan",
            "title" => "Learning Basic Laravel",
            "content" => "Laravel is one of the most popular PHP frameworks used for modern web development. It offers an elegant syntax and a powerful set of tools that make building web applications more efficient and enjoyable."
        ]
    ];


    $blog = Arr::first($blogs, function ($blog) use ($slug) {
        return $blog["slug"] == $slug;
    });
    return view("blog-detail", ["blog" => $blog]);
});

Route::get('/contact', function () {
    return view("contact", ["email" => "ridoseptiawan@gmail.com", "fesnuk" => "Rido Septiawan"]);
});
