<?php

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
            "title" => "Belajar Laravel Dasar",
            "content" => "Laravel adalah framework PHP yang sangat populer untuk pengembangan web."
        ],
        [
            "title" => "Mengenal Blade Template",
            "content" => "Blade adalah templating engine bawaan Laravel yang memudahkan dalam membuat tampilan dinamis."
        ]
    ];

    return view("blog", compact('blogs'));
});

Route::get('/contact', function () {
    return view("contact", ["email" => "ridoseptiawan@gmail.com", "fesnuk" => "Rido Septiawan"]);
});
