@extends('layout.app') 

@section('title') 
{{$title}}
@endsection
@section('content')
<div
    class="
        relative
        flex
        items-top
        min-h-screen
        bg-gray-100
        dark:bg-gray-900
        py-4
        sm:pt-0
        redone
    "
>
    <div class="container">
        <h1>
            Welcome to <span>Calories</span> calculator
        </h1>
        <a href="/"><button class="btn btn-primary">Login</button></a>
        <a href="/"><button class="btn btn-secondary">Register</button></a>
    </div>
</div>
@endsection
