<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[StudentController::class, 'Home'] )->name('HomePage');
Route::post('/add-student',[StudentController::class, 'addStudent']);
