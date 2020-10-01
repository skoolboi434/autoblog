@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Post</h1>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>

            <div class="form-group">
                {{Form::label('maker', 'Maker')}}
                {{Form::text('maker', '', ['class' => 'form-control', 'placeholder' => 'Maker'])}}
            </div>

            <div class="form-group">
                {{Form::label('production', 'Production')}}
                {{Form::text('production', '', ['class' => 'form-control', 'placeholder' => 'Years in Production'])}}
            </div>

            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Vehicle Information'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>
@endsection