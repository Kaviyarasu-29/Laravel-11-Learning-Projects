<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function createComment()
    {
        return view('comments');
    }

    // basic method
    public function storeComment(Request $request)
    {
        $request->validate([
            // 'name' => 'required|string|max:255',

            'comment1' => 'required|string|max:255',
            'comment2' => 'required|string|max:255',
            'comment3' => 'required|string|max:255',
            'comment4' => 'required|string|max:255',
            'post_id' => 'required|integer'
        ]);


        $comment1 = new Comment([
            'name' => $request->input('comment1'),
            'post_id' => $request->input('post_id')
        ]);
        $comment1->save();

        // Create comment 2
        $comment2 = new Comment([
            'name' => $request->input('comment2'),
            'post_id' => $request->input('post_id')
        ]);
        $comment2->save();

        $comment3 = new Comment([
            'name' => $request->input('comment3'),
            'post_id' => $request->input('post_id')
        ]);
        $comment3->save();

        $comment4 = new Comment([
            'name' => $request->input('comment4'),
            'post_id' => $request->input('post_id')
        ]);
        $comment4->save();


         redirect('/list');


    }
}




        // $data = $request->only(['comment1', 'comment2', 'post_id']);

        // Comment::create($data);
        // return redirect('/list');
        // return redirect('/home');
//     }
// }
