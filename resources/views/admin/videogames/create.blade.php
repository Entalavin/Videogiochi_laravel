@extends('layouts.admin')

@section('title', 'Inserisci Videogioco')

@section('content')
{{-- @dd($developers) --}}

<div class="container" >
    <h1 class="text-center text-uppercase">inserimento videogioco</h1>
    <form action=" {{route('admin.videogames.store')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" required></textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Generi</label><br>
            @foreach($genres as $genre)
            <input type="checkbox" id="genre_{{$genre->id}}" name="genre[]" value="{{$genre->id}}">
            <label for="genre_{{$genre->id}}">{{$genre->name}}</label>
            @endforeach
        </div>
        <div class="mb-3">
            <label for="developer_id" class="form-label">Developer</label>
            <select class="form-control" name="developer_id" id="developer_id">
                @foreach($developers as $developer) 
                <option value=" {{$developer->id}}"> {{$developer->name}} </option>
                @endforeach
            </select>
            
            @error('developer_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="publisher_id" class="form-label">Publisher</label>
            <select class="form-control" name="publisher_id" id="publisher_id">
                @foreach($publishers as $publisher) 
                <option value=" {{$publisher->id}}"> {{$publisher->name}} </option>
                @endforeach
            </select>

            @error('publisher_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="text" class="form-control" id="year" name="year" required>
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="poster" class="form-label">Immagine Cover</label><br>
            <input type="file" name="poster" id="poster" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
    {{-- ottimo lavoro quello dopo brava valentina --}}
    <br><br><br><br><br><br> 
</div>





{{-- <form method="POST" action="{{ route('films.store') }}" enctype="multipart/form-data"> --}}
    @endsection