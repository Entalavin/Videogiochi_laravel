@extends('layouts.app')

@section('title', 'Videogame_detail')
{{-- @dd($videogames) --}}

@section('content')
    <h1> {{$videogame->title}} </h1>
        {{-- @dd($videogame) --}}
    <div class="row">
        <div class="col-md-6">
            <h2>{{$videogame->developer_id}}</h2>
            <h3>  {{$videogame->publisher_id}}</h3>
            <p> {{$videogame->description}} </p>
        </div>
    </div>


@endsection