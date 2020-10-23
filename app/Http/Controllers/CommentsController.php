<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\comments;

class CommentsController extends Controller
{
  
    public function store(Post $post){
       
        comments::create([
        'body' => request('body'),
            'post_id' => $post->id
        ]);      
        return redirect('/posts')->with('success','Comment added');
    }
  
}
