@extends('layouts.admin')

@section('title', 'Inserisci Publisher')

@section('content')

<div class="container">
    <h1 class="text-center text-uppercase">inserimento publisher</h1>
    <form action="{{route('admin.publishers.store')}} " method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nationality" class="form-label">Nazionalità</label>
            <input type="text" class="form-control" id="nationality" name="nationality" required>
            @error('nationality')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</div>
    @endsection