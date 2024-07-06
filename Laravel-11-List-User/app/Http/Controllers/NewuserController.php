<?php

namespace App\Http\Controllers;

use App\Models\Newuser;
use Illuminate\Http\Request;

class NewuserController extends Controller
{
    public function create()
    {
        return view('create_user');
    }


    // store the form data
    public function store(Request $request)
    {
        $data = $request->only(['name', 'age', 'phone']);

        $newuser = Newuser::create($data);

        return "Successfylly inserted - User id : " . $newuser->id . "<br> <br>" . "<a href='/list'>Go to list</a>";
    }


    // list the stored data
    public function list()
    {
        $users = Newuser::all();
        return view('list_user', ['users' => $users]);
    }
}
