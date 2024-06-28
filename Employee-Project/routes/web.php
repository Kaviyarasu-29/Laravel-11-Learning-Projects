<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return config('app.url');
});


// Route Parameter

// 1. ID parametr
Route::get('/new/{id}', function ($id) {
    return 'User New ID: ' . $id;
});

// 2. Name Parameter with Default Value
Route::get('/user/{name?}', function ($name = 'AWP') {
    return 'User Name: ' . $name;
});

// 3. Parameter to Render View or Return Default Message
Route::get('/try/{name?}', function ($name = 'Guest') {
    if ($name != 'Guest') {
        return view($name);
    } else {
        return 'User Name: ' . $name;
    }
});
