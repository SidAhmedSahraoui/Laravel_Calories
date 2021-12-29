@extends('layout.app')
@section('content')
    <h1>
        Create New Post
    </h1>  
              <form action="PostController@store" method="POST">
                  <input type="text"  placeholder="title" >
                  <textarea name="core" id="core" cols="30" rows="10" placeholder="Core" class="form-control">

                  </textarea>
                  <input type="number" name="calories" id="cal">
                  <input type="submit" class="btn btn-primary">
              </form>
    <a href="/posts"><button class="btn btn-secondary">Go Back</button></a>

       
@endsection