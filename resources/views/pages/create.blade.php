@extends('layout.app')
@section('title') 
Create Post
@endsection
@section('content')
    <h1>
        Create New Post
    </h1>  
        {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST']) !!}
                <div class="from-group">
                    {{Form::label('title','Title')}}
                    <br>
                    {{Form::text('title','', ['class'=>'form-control form-title', 'placeholder'=>'Title'] )}}
                </div>
                <div class="from-group">
                    {{Form::label('core','Some Exemples')}}
                    <br>
                    {{Form::textarea('core','', ['class'=>'form-control form-text', 'placeholder'=>'Some Exemples'] )}}
                </div>
                <div class="from-group">
                    {{Form::label('calories','Calories')}}
                    <br>
                    {{Form::number('calories','', ['class'=>'form-control form-num', 'placeholder'=>'Calories'] )}}
                </div>
                <div class="from-group">
                    {{Form::submit('Submit', ['class'=>'btn btn-secondary'] )}}
                </div>
        {!! Form::close() !!}

       
@endsection