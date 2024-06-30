@extends('layouts.admin')

@section('title', 'Modifica Videogioco')

@section('content')

<div class="container">
    <h1 class="text-center text-uppercase">modifica videogioco</h1>
    <form action="{{route('admin.videogames.update', $videogame->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value= "{{$videogame->title}}" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" required>{{$videogame->description}}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            {{-- @foreach($genres as $genre)
            <input type="checkbox" id="genre_{{$genre->id}}" name="genre[]" value="{{$genre->id}}" {{ $videogame->genre->contains($genre->id) ? 'checked' : '' }}>
            <label for="genre_{{$genre->id}}">{{$genre->name}}</label>
            @endforeach --}}
            <label class="form-label">Generi</label><br>
            @foreach($genres as $genre)
                <input type="checkbox" id="genre_{{ $genre->id }}" name="genre[]" value="{{ $genre->id }}" {{ $videogame->genre->contains($genre->id) ? 'checked' : '' }}>
                <label for="genre_{{ $genre->id }}">{{ $genre->name }}</label>
                <br>
            @endforeach
            {{-- @foreach($genres as $genre)
                <div class="col-md-6">
                    <div class="form-check">
                        <input type="checkbox" name="genres[]" id="genre{{ $genre->id }}" value="{{ $genre->id }}" class="form-check-input" {{ in_array($genre->id, $videogame->genres->pluck('id')->toArray()) ? 'checked' : '' }}>
                        <label for="genre{{ $genre->id }}" class="form-check-label">{{ $genre->name }}</label>
                    </div>
                </div>
            @endforeach --}}
        </div>
        <div class="mb-3">
            <label for="developer_id" class="form-label">Developer</label>
            <select name="developer_id" id="developer_id" class="form-control" required>
                @foreach($developers as $developer)
                    <option value="{{ $developer->id }}" {{ $videogame->developer_id == $developer->id ? 'selected' : '' }}>{{ $developer->name }}</option>
                @endforeach
            </select>
            @error('developer_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="publisher_id" class="form-label">Publisher</label>
            <select name="publisher_id" id="publisher_id" class="form-control" required>
                @foreach($publishers as $publisher)
                    <option value="{{ $publisher->id }}" {{ $videogame->publisher_id == $publisher->id ? 'selected' : '' }}>{{ $publisher->name }}</option>
                @endforeach
            </select>
            @error('publisher_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="text" class="form-control" id="year" name="year" value= "{{$videogame->year}}"  required>
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="poster" class="form-label">Immagine Cover</label><br>
            <input type="file" name="poster" id="poster" class="form-control-file">
            <img src="{{ asset('storage/' . $videogame->poster) }}" alt="{{ $videogame->title }}" class="img-thumbnail mt-2" style="max-width: 150px;">
        </div>


        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</div>

@endsection
