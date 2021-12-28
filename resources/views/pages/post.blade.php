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
       
@endsection