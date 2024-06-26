@extends('layouts.admin')

@section('title', 'Gestisci Developers')

@section('content')
<div class="py-3">
    <h1 class="text-center text-uppercase">Developers</h1>
    {{-- @dd($developers) --}}
    <div class="pb-4 mx-2">
        <a href="{{route('admin.developers.create')}}" class="link-dark link-underline-opacity-0">Inserisci un nuovo Developer!</a>
        </div>
        
        <div class="mx-2">
          <table class="table table-striped">
            <thead>
              <tr class="table-warning">
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Nazionalità</th>
                <th scope="col">Operazioni</th>
              </tr>
            </thead>
            <tbody>
              @foreach($developers as $developer)
              {{-- @dd($videogame) --}}
              <tr class="table-primary"> {{-- da fare il foreach --}}
                <th scope="row"> {{$developer->id}} </th>
                <td>{{$developer->name}}</td>
                <td>{{$developer->nationality}}</td>
                <td>
                  <a href=" {{route('admin.developers.edit', $developer->id)}} ">Modifica</a>
                  <form action="">
                    <input type="submit" value='Elimina'>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>


@endsection