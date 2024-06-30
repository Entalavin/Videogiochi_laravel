@extends('layouts.admin')

@section('title', 'Inserisci Developer')

@section('content')
{{-- @dd($developers) --}}
<div class="container pt-5">
    <h1 class="text-center text-uppercase" style="margin-bottom: 20px">inserimento developer</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style=" margin-bottom: 500px">
                <div class="card-body">
                    <form action="{{route('admin.developers.store')}} " method="post">
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
            </div>
        </div>
    </div>
</div>

{{-- <form method="POST" action="{{ route('films.store') }}" enctype="multipart/form-data"> --}}
    @endsection
    