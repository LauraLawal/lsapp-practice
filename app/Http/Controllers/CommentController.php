<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        Comment::create([
            'body' => request('body'),
            'post_id' => $post->id
        ]);
        return redirect('/posts')->with('success', 'Comment added');
    }
}
