@extends('layouts.app')

@section('title', 'Videogame dettagli')
{{-- @dd($videogames) --}}

@section('content')
    <h1> {{$videogame->title}} </h1>
        {{-- @dd($videogame) --}}
    <div class="row">
        <div class="col-md-6">
            <h2>Sviluppato da {{$videogame->developer->name}}</h2>
            <h3>Publisher: {{$videogame->publisher->name}}</h3>
            <p> {{$videogame->description}} </p>
        </div>
    </div>


@endsection