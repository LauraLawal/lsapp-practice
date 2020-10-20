<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'comment' => 'required'
            ]);
            $post = Post::find($id);
            $post = new Post;
            $post->comment = $request->input('comment');
            $post->save();
            return redirect('/posts')->with('success','Comment added');
}
}