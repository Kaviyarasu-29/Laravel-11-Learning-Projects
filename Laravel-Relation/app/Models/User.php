<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Phone;
use Illuminate\Http\Request;

class User extends Model
{
    use HasFactory;

    // public function create()
    // {
    //     return view('create_user');
    // }


    // // store the form data
    // public function store(Request $request)
    // {
    //     $data = $request->only(['name']);

    //     $newuser = Newuser::create($data);

    //     return "Successfylly inserted - User id : " . $newuser->id . "<br> <br>" . "<a href='/list'>Go to list</a>";
    // }


    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
}
