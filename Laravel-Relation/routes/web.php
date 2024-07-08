<?php

use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',function() {
    $user = User::find(1);
    // dd($user->Phone);

    $Phone = Phone::with('user')->whereId(1)->first();
    return Response::json($Phone);


} );


// change the value
Route::get('/change', function() {
   $user = User::find(1);
   $updatePhone  = new Phone;
   $updatePhone->phone = "1234567890";

   $user->phone()->update($updatePhone->toArray());

   return redirect('/');
} );
