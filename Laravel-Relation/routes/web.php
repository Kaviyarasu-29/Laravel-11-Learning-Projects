<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',function() {
    $user = User::find(1);
    dd($user->Phone);
} );
