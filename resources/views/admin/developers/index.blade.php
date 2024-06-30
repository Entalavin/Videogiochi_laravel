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
                  <a class="btn btn-primary" href=" {{route('admin.developers.edit', $developer->id)}} ">Modifica</a>
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
                    @if ($developers->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $developers->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                    @endif
                    
                    {{-- Link alle pagine --}}
                    @foreach ($developers->getUrlRange(1, $developers->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $developers->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
                    
                    {{-- Link alla pagina successiva --}}
                    @if ($developers->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $developers->nextPageUrl() }}" aria-label="Next">
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