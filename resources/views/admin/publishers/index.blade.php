@extends('layouts.admin')

@section('title', 'Gestisci Publishers')

@section('content')
<div class="py-3">
    <h1 class="text-center text-uppercase">Publishers</h1>
    {{-- @dd($developers) --}}
    <div class="pb-4 mx-2">
        <a href="{{route('admin.publishers.create')}}" class="link-dark link-underline-opacity-0">Inserisci un nuovo Publisher!</a>
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
              @foreach($publishers as $publisher)
              {{-- @dd($videogame) --}}
              <tr class="table-primary"> {{-- da fare il foreach --}}
                <th scope="row"> {{$publisher->id}} </th>
                <td>{{$publisher->name}}</td>
                <td>{{$publisher->nationality}}</td>
                <td>
                  <a class="btn btn-primary" href=" {{route('admin.publishers.edit', $publisher->id)}} ">Modifica</a>
                  <form action="">
                    <input class="btn btn-danger px-3" type="submit" value='Elimina' onclick="return confirm('VUOI DAVVERO CANCELLARE?')">
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
                    @if ($publishers->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $publishers->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                    @endif
                    
                    {{-- Link alle pagine --}}
                    @foreach ($publishers->getUrlRange(1, $publishers->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $publishers->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
                    
                    {{-- Link alla pagina successiva --}}
                    @if ($publishers->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $publishers->nextPageUrl() }}" aria-label="Next">
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