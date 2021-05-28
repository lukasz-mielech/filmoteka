<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Filmoteka</title>
        <style>

        </style>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Filmoteka</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                        @guest
                        <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
                        <a class="nav-link text-dark" href="{{ route('register') }}">Register</a>
                        @endguest
                        @auth
                        <a class="nav-link" href="{{route('update')}}">{{auth()->user()->name}}</a>
                        <form action="{{route('logout')}}" method="post" class="nav-link p-0">
                            @csrf
                            <button type="submit" class="btn btn-link text-decoration-none text-dark">Wyloguj</button>
                        </form>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>
