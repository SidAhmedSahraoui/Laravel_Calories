@extends('layout.app') 
 @section('main-cont') 
 class="main-cont"
@endsection
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
    "
>
    <div class="container">
        <h1 class="main-title">
            Welcome to <span>Calories</span> calculator
        </h1>
        <h3 class="sub-title">
            create your account or sign in and start your diet !
        </h3>
        <a href="/"><button class="btn btn-primary">Login</button></a>
        <a href="/"><button class="btn btn-secondary">Register</button></a>
    </div>
</div>
@endsection
