<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\SalaryController;




// User creation
Route::get('/home', [UsersController::class, 'createUser']);
Route::post('/store_user', [UsersController::class, 'storeUser']);


// Salary Creation
Route::get('/create_salary', [SalaryController::class, 'createSalary']);
Route::post('/store_salary', [SalaryController::class, 'storeSalary']);


// list the stored data
Route::get('/list',[UsersController::class,'list']);

Route::redirect('/', '/home');














// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',function() {
//     $user = User::find(1);
//     // dd($user->Phone);

//     $Phone = Phone::with('user')->whereId(1)->first();
//     return Response::json($Phone);


// } );


// // change the  phone value
// Route::get('/phoneChange', function() {
//    $user = User::find(1);
//    $updatePhone  = new Phone;
//    $updatePhone->phone = "1234567890";

//    $user->phone()->update($updatePhone->toArray());

//    return redirect('/');
// } );

// //  change the name value
// Route::get('/nameChange', function () {
//     $user = User::find(1);
//     $user->update(['name' => 'AWP']);

//     // $user->name()->update($updateName->toArray());
//     return redirect('/');
// });




