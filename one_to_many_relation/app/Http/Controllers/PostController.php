<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function createPost()
    {
        return view('post');
    }

    public function storePost(Request $request)
    {
        $request->validate([
            // 'uid' => 'required|integer|unique:users,uid',
            'name' => 'required|string|max:255|unique:posts,name',
            // 'age' => 'required|integer',
        ]);

        $data = $request->only(['name']);


        $user = Post::create($data);
        return redirect('/create_comment')->with(['post_id' => $user->id]);
    }

    public function list()
    {
        $users = Post::all();
        return view('db_list', ['users' => $users]);
    }
}
