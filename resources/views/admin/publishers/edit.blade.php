@extends('layouts.admin')

@section('title', 'Modifica Publisher')

@section('content')

    <div class="container pt-5">
        <h1 class="text-center text-uppercase" style="margin-bottom: 20px">modifica publisher</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style=" margin-bottom: 500px">
                    <div class="card-body">
                        <form action="{{ route('admin.publishers.update', $publisher->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value= "{{ $publisher->name }}" required>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nationality" class="form-label">Nazionalità</label>
                                <input type="text" class="form-control" id="nationality" name="nationality"
                                    value= "{{ $publisher->nationality }}" required>
                                @error('nationality')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Modifica</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
