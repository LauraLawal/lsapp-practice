<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;

class CommentsController extends Controller
{
    // Post $post
    public function store(Request $request){
        $post = new Post;
        comments::create([
            'body' => request('body'),
            'id' => $post->id
        ]);
        return back();
    }
}
