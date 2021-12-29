@extends('layout.app')
@section('content')
    <h1>
        Create New Post
    </h1>  
        {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST']) !!}
                <div class="from-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title','', ['class'=>'form-control', 'placeholder'=>'Title'] )}}
                </div>
        {!! Form::close() !!}
    <a href="/posts"><button class="btn btn-secondary">Go Back</button></a>

       
@endsection