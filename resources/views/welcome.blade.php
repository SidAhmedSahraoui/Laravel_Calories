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
    <h1>hello from <span>{{$title}}</span></h1>
</div>
@endsection
