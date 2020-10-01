@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="my-3">
            <a href="/posts" class="btn btn-primary">Go Back</a>
        </div>
        <div>
            <img src="../storage/cover_images/{{$post->cover_image}}" class="img" alt="" style="width: 100%;">
        </div>
        <div class="stats mb-2">
            <h1>{{$post->title}}</h1>
            <p><b>Manufacturer: </b>{{$post->maker}}</p>
            <p><b>Years in production:</b> <small>{{$post->production}}</small></p>
        </div>
        
        <div>
            {!! $post->body !!}
        </div>
        <hr>
        <small>Added by: {{$post->user->name}} <br> On: {{$post->created_at}}</small>
        
        
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
                <hr>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
    
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn button btn-danger'])}}
                {!!Form::close()!!}
            @endif  
        @endif
    </div>
    
@endsection