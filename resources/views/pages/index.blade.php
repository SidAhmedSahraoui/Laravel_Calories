@extends('layout.app')
@section('content')
    <h1>
      Posts
    </h1>  
    <a href="/posts/create"><button class="btn btn-primary">create post</button></a>
    <div class="post-cont">
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <a href="/posts/{{$post -> id}}">
            <div class="post-card">
              <h3 class="card-title">
                 {{$post ->title}}
              </h3>
              <p class="card-core">
                every (100 g) of  {{$post ->title}} like : {{$post ->core}} contain {{$post -> calories}} calories
              </p>
            </div>
          </a>
        @endforeach
    @else
        <h3>No Data Found</h3>
    @endif
    </div>
@endsection