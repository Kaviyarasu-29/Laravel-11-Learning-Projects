<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function createUser()
    {
        return view('create_user');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            // 'uid' => 'required|integer|unique:users,uid',
            'name' => 'required|string|max:255|unique:users,name',
            'age' => 'required|integer',
        ]);

        $data = $request->only(['name', 'age']);


        $user = User::create($data);
        return redirect('/create_salary')->with(['user_id' => $user->id]);
    }

    public function list()
    {
        $users = User::all();
        return view('db_list', ['users' => $users]);
    }
}
