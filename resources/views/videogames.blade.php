@extends('layouts.app')

@section('title', 'Videogames')
{{-- @dd($videogames) --}}

@section('content')
<div>
    <h1 class="text-center text-uppercase" style="padding-top: 50px; padding-bottom: 50px">Tutti i videogiochi</h1>
    <p class="text-center" style="padding-bottom:30px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem laborum vero incidunt possimus, hic eligendi adipisci quidem magnam expedita doloribus nobis numquam quis repellat corporis dolores fuga assumenda atque! Quia?</p>
    <hr class="border border-primary border-2 opacity-50">
</div>
<div class="container">
    <div class="row mx-auto" style="width: 100%;">
        @foreach ($videogames as $videogame)
        {{-- @dd($videogame) --}}
        <div class="col-md-3 mb-5 px-5">
            <div class="card" style="width: 18rem; background-color:rgb(192, 159, 223)">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$videogame->title}}</h5>
                  <h6 class="card-subtitle mb-2">Anno di uscita: {{$videogame->year}}</h6>
                  <h6 class="card-subtitle mb-2">Genere: 
                    {{-- @foreach($videogame->genre as $genre){{$videogame->genre}} </h6>
                    @endforeach --}}
                    <br>
                  <a href=" {{route('show', $videogame->id)}}" class="btn btn-primary mt-5">Mostra dettagli!</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection