@extends('layouts.admin')

@section('title', 'Inserisci Videogioco')

@section('content')

<div class="container">
    <h1 class="text-center text-uppercase">inserimento videogioco</h1>
    <form action=" {{route('admin.videogames.store')}} " method="post">
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
            <label for="developer_id" class="form-label">Developer</label>
            <input type="text" class="form-control" id="developer_id" name="developer_id" required>
            @error('developer_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="publisher_id" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="publisher_id" name="publisher_id" required>
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
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</div>





{{-- <form method="POST" action="{{ route('films.store') }}" enctype="multipart/form-data"> --}}
    @endsection