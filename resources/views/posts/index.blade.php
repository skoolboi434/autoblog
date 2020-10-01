@extends('layouts.app')

@section('content')

<div class="container">
    <div class="py-3">
        <h1>Posts</h1>
    </div>
    <div class="blog-posts">
        @if (count($posts) > 0)
            @foreach ($posts as $post)
            <div class="post">
                <div class="post-content">
                    <div class="post-image">
                        <div>
                            <img src="../storage/cover_images/{{$post->cover_image}}" class="img" alt="blog1">
                        </div>
                        <div class="post-info flex-row">
                            <span><i class="fa fa-user text-gray"></i>&nbsp;&nbsp;Added By: {{$post->user->name}}</span>
                            <span><i class="fa fa-calendar text-gray"></i>&nbsp;&nbsp;On: {{$post->created_at}}</span>
                        </div>
                    </div>
                    <div class="post-title">
                        <span class="link-holder"><a href="/posts/{{$post->id}}">{{$post->title}}</a></span>
                        <span class="link-holder">
                            <a href="/posts/{{$post->id}}" class="btn post-btn">Read More &nbsp; <i class="fa fa-arrow-right"></i></a>
                        </span>
                    </div>
                </div>
                
            </div>
                
            @endforeach
            {{$posts->links()}}
        @else
            <p>No Posts Found</p>
        @endif
    </div>
</div>
    
@endsection