@extends('layouts.admin')

@section('title', 'Modifica Developer')

@section('content')

<div class="container">
    <h1 class="text-center text-uppercase">modifica developer</h1>
    <form action="{{route('admin.developers.update', $developer->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value= "{{$developer->name}}" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nationality" class="form-label">Nazionalità</label>
            <input type="text" class="form-control" id="nationality" name="nationality" value= "{{$developer->nationality}}" required>
            @error('nationality')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</div>

@endsection
