@extends('layouts.admin')

@section('title', 'Gestisci Videogiochi')

@section('content')

<h1 class="text-center text-uppercase">Videogiochi</h1>
{{-- @dd($videogames) --}}
<a href="">Inserisci un nuovo videogioco!</a>


<div>
  <table class="table table-striped">
    <thead>
      <tr class="table-success">
        <th scope="col">id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Developer</th>
        <th scope="col">Publisher</th>
        <th scope="col">Operazioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach($videogames as $videogame)
      {{-- @dd($videogame) --}}
      <tr class="table-warning"> {{-- da fare il foreach --}}
        <th scope="row"> {{$videogame->id}} </th>
        <td>{{$videogame->title}}</td>
        <td>{{$videogame->developer_id}}</td>
        <td>{{$videogame->publisher_id}}</td>
        <td>
          <a href="">Modifica</a>
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