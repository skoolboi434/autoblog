@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                  <span>Dashboard</span>
                </div>
                <div class="card-body">
                    <a href="/posts/create" class="btn btn-create mb-3">Create Post</a>
                    <h3>Your Posts</h3>
                        @if (count($posts) > 0)
                        
                    
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else 
                        <p>You have no posts.</p>    
                    @endif
                    
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection