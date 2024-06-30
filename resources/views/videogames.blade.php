@extends('layouts.app')

@section('title', 'Videogames')
{{-- @dd($videogames) --}}

@section('content')
<div>
    <h1 class="text-center text-uppercase" style="padding-top: 50px; padding-bottom: 50px">Tutti i videogiochi</h1>
    <p class="text-center" style="padding-bottom:30px">Pueri er traffik herbae kilos impellit ex quo indecim anno habet ergo ne scripseritis falsa verba sus deus in meum dm ne foedaverits cum vestris stupidis verbis turpes meretrices culi nigri traffik trapis rex est kilos impellit nos repperini qui expergiscintur mane et repperini faciunt non facimus intelligisne hoc est trap veritati omnes canti quem scribemus sunt nostra vita intellegisne gallagher traffikque agimus vita in film se traffik captus est intellegisne quod kilos habebat non scitis quantum carebor esse cui traffik trappando omnes dies sue domi intellegisne non scitis quantum carebor er traffik et omnia quae egimus et risos et omnia res in quibus omnes vos derisimus</p>
    <hr class="border border-primary border-2 opacity-50">
</div>
<div class="container">
    <div class="row mx-auto" style="width: 100%;">
        @foreach ($videogames as $videogame)
        {{-- @dd($videogame) --}}
        {{-- @dd($developers) --}}
        {{-- @dd($genres) --}}
        <div class="col-md-3 mb-5 px-5">
            <div class="card" style="width: 18rem; background-color:rgb(192, 159, 223)">
                <img src="{{asset('storage/' . $videogame->poster)}}" class="card-img-top" alt="immagine_{{$videogame->title}}">
                <div class="card-body">
                  <h5 class="card-title">{{$videogame->title}}</h5>
                  <h6 class="card-subtitle mb-2">Anno di uscita: {{$videogame->year}}</h6>
                  @if($videogame->genre->isNotEmpty())
                  <h6 class="card-subtitle mb-2">Genere: 
                    @foreach($videogame->genre as $genre){{$genre->name}} 
                      @unless($loop->last), @endunless
                    @endforeach
                  </h6>
                  @endif
                  <a href=" {{route('show', $videogame->id)}}" class="btn btn-primary mt-4">Mostra dettagli!</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection