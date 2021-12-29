@extends('layout.app')
@section('content')
    <h1>
        {{$post ->title}}
    </h1>  
            <div class="well">
              <h3>
                    This is the description of this product
              </h3>
              <p>
                every (100 g) of  {{$post ->title}} like : {{$post ->core}} contain {{$post -> calories}} calories
              </p>
            </div>
            <div class="btns">
              <a href="/posts"><button class="btn btn-secondary">Go Back</button></a>
              <a href="/posts/{{$post->id}}/edit"><button class="btn btn-primary">Edit Post</button></a>
              <div>
              {!!Form::open(['action'=> ['App\Http\Controllers\PostController@update',$post->id],'method'=>'POST'])!!}
              {{Form::hidden('_method','DELETE')}}
              {{Form::submit('Delete', ['class'=>'btn btn-danger'] )}}
              {!!Form::close()!!}
              </div>
            </div>
    

@endsection