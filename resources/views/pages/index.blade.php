@extends('layout.app')
@section('content')
    <h1>
      Posts
    </h1>  
    <a href="/posts/create"><button class="btn btn-primary">create post</button></a>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
              <h3>
               <a href="/posts/{{$post -> id}}">  {{$post ->title}} </a>
              </h3>
              <p>
                every (100 g) of  {{$post ->title}} like : {{$post ->core}} contain {{$post -> calories}} calories
              </p>
            </div>
        @endforeach
    @else
        <h3>No Data Found</h3>
    @endif
@endsection