@extends('layouts.app')




@section('content')

    <h1>create post</h1>

    {{--<form method="post" action="/posts">--}}
        {!! Form::open(['method' => 'POST', 'action' => 'PostsController@store']) !!}

    <div class="form-group">

        {!! Form::label('title', "Title:") !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-control">
        {!! Form::submit() !!}
    </div>

    {!! Form::close() !!}



@endsection