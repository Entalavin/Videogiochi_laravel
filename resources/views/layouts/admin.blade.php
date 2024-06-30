<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Videogames')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary-subtle px-1 fs-3 text-uppercase" data-bs-theme="dark" style="padding-top: 20px; padding-bottom: 20px">
        <div class="container-fluid">
          <div>
            <a class="navbar-brand" href="{{route('angelina')}}">
                <img src="{{asset('img/IMG_20220907_003333.jpg')}}" alt="" width="60" height="60" alt="">
            </a>
        </div>
          <a class="navbar-brand fs-3 text-uppercase mx-3" href="{{route('home')}}">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route ('admin.dashboard')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route ('admin.videogames.index')}}">Gestisci Videogiochi</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route ('admin.developers.index') }}">Gestisci Developer</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route ('admin.publishers.index')}}">Gestisci Publisher</a>
              </li>

              </li>
            </ul>
          </div>
        </div>
    </nav>
    <main style="background-color: rgb(172, 179, 235)">
            @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>