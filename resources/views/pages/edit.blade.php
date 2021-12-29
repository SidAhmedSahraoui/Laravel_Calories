@extends('layout.app')
@section('content')
    <h1>
        Edit Post
    </h1>  
        {!! Form::open(['action' => ['App\Http\Controllers\PostController@update' , $post->id], 'method' => 'POST']) !!}
                <div class="from-group">
                    {{Form::label('title','Title')}}
                    <br>
                    {{Form::text('title',$post->title, ['class'=>'form-control', 'placeholder'=>'Title'] )}}
                </div>
                <div class="from-group">
                    {{Form::label('core','Core')}}
                    <br>
                    {{Form::textarea('core',$post->core, ['class'=>'form-control', 'placeholder'=>'Core'] )}}
                </div>
                <div class="from-group">
                    {{Form::label('calories','Calories')}}
                    <br>
                    {{Form::number('calories',$post->calories, ['class'=>'form-control', 'placeholder'=>'Calories'] )}}
                </div>
                {{Form::hidden('_method','PUT')}}

                <div class="from-group">
                    {{Form::submit('Submit', ['class'=>'btn btn-secondary'] )}}
                </div>
        {!! Form::close() !!}

       
@endsection