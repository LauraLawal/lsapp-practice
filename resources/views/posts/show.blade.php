@extends('layouts.app')

    @section('content')
<a href = "/posts" class ="btn btn-primary"> Go Back </a>

<h1>{{$post->title}}</h1>

<div>
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

<hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
        <a href= "/posts/{{$post->id}}/edit" class = "btn btn-info"> Edit </a>
            {!!Form::open(['action'=> ['PostsController@destroy', $post->id],'method' => 'POST','class'=>'float-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    <hr>

        <div class = "card">
            <div class = "card-black">
             
            <form method = "POST" action="/posts/{{$post->id}}/comments">
                    {{csrf_field()}}
                    <div class = "form-group">
                        <textarea name = "body" placeholder="Leave a comment.." class = "form-control"></textarea>
                            </div>
                            <div class = "form-group">
                                <button   type = "submit" class= "btn btn-primary"> Add Comment </button>                                   
                            </div>
                </form>
            
            </div>
        </small>
@endsection