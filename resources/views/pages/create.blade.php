@extends('layout.app')
@section('content')
    <h1>
        Create New Post
    </h1>  
        {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST']) !!}
                <div class="from-group">
                    {{Form::label('title','Title')}}
                    <br>
                    {{Form::text('title','', ['class'=>'form-control', 'placeholder'=>'Title'] )}}
                </div>
                <div class="from-group">
                    {{Form::label('core','Core')}}
                    <br>
                    {{Form::textarea('core','', ['class'=>'form-control', 'placeholder'=>'Core'] )}}
                </div>
                <div class="from-group">
                    {{Form::label('calories','Calories')}}
                    <br>
                    {{Form::number('calories','', ['class'=>'form-control', 'placeholder'=>'Calories'] )}}
                </div>
                <div class="from-group">
                    {{Form::submit('Submit', ['class'=>'btn btn-secondary'] )}}
                </div>
        {!! Form::close() !!}

       
@endsection