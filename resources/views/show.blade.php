@extends('layouts.app')

@section('title', 'Videogame dettagli')
{{-- @dd($videogames) --}}

@section('content')
    <h1 class="text-center py-5"> {{$videogame->title}} </h1>
        {{-- @dd($videogame) --}}
    <div class="container">
        <h2 class="text-center py-3">Sviluppato da: {{$videogame->developer->name}}</h2>
        <h3 class="text-center py-3">Publisher: {{$videogame->publisher->name}}</h3>
        <p class="text-center"> {{$videogame->description}} </p>
        <img src="{{asset('storage/' . $videogame->poster)}}" class="covershow rounded mx-auto d-block" alt="immagine_{{$videogame->title}}">
    </div>


@endsection