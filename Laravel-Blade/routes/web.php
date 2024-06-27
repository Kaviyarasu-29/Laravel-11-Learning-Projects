<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/layout', function () {
    return view('layouts.default');
});

Route::get('/', function () {
    return view('Home');
});
Route::get('/About', function () {
    return view('About');
});
Route::get('/Contact', function () {
    return view('Contact');
});

