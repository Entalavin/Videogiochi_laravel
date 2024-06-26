@extends('layouts.admin')

@section('title', 'Gestisci Videogiochi')

@section('content')
<div class="py-3">
<h1 class="text-center text-uppercase">Videogiochi</h1>
</div>
{{-- @dd($videogames) --}}
<div class="pb-4 mx-2">
<a href="{{route('admin.videogames.create')}}" class="link-dark link-underline-opacity-0">Inserisci un nuovo videogioco!</a>
</div>

<div class="mx-2">
  <table class="table table-striped">
    <thead>
      <tr class="table-warning">
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
      <tr class="table-primary"> {{-- da fare il foreach --}}
        <th scope="row"> {{$videogame->id}} </th>
        <td>{{$videogame->title}}</td>
        <td>{{$videogame->developer->name}}</td>
        <td>{{$videogame->publisher->name}}</td>
        <td>
          <a href=" {{route('admin.videogames.edit', $videogame->id)}} ">Modifica</a>
          <form action="{{route('admin.videogames.destroy', $videogame->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Elimina" onclick="return confirm('VUOI DAVVERO CANCELLARE?')">
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection