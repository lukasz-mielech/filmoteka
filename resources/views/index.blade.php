@extends('layouts.app')

@section('content')
    <div>
        <div class="container bg-light py-2 text-center">
            @guest
            Witamy na stronie filmoteka, zaloguj lub zarejestruj się aby oglądać nasze filmy
            @endguest
            @auth
            Witamy użytkowniku {{auth()->user() -> name}}
            @endauth
        </div>
    </div>
@endsection