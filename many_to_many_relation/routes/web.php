<?php

use App\Models\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    $user = User::with('roles')->whereId(1)->first();
    return Response::json($user);
});
