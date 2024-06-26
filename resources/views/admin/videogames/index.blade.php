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
  <div class="pagination-container">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            {{-- Link alla pagina precedente --}}
            @if ($videogames->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link">&laquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $videogames->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            @endif
            
            {{-- Link alle pagine --}}
            @foreach ($videogames->getUrlRange(1, $videogames->lastPage()) as $page => $url)
                <li class="page-item {{ $page == $videogames->currentPage() ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
            @endforeach
            
            {{-- Link alla pagina successiva --}}
            @if ($videogames->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $videogames->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link">&raquo;</span>
                </li>
            @endif
        </ul>
    </nav>
</div>
</div>
@endsection