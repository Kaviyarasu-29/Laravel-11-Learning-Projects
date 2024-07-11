<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// post creation
Route::get('/home', [PostController::class, 'createPost']);
Route::post('/store_post', [PostController::class, 'storePost']);


// Salary Creation
Route::get('/create_comment', [CommentController::class, 'createComment']);
Route::post('/store_comment', [CommentController::class, 'storeComment']);


// list the stored data
Route::get('/list',[PostController::class,'list']);

Route::redirect('/', '/home');
