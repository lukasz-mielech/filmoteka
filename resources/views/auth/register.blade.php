@extends('layouts.app')

@section('content')
    <div>
        <div class="container bg-light py-4 px-5">
            <h3 class="mb-3">Zarejestruj się</h3>
            <form action="{{route('register')}}" method="post" class="w-50">
                @csrf
                <div class="">
                    <input type="text" name="name" class="form-control mt-2 @error('name') border border-danger @enderror" id="name" placeholder="Imię Nazwisko" value="{{old('name')}}">
                    @error('name')
                    <p class="text-danger mx-1 mb-0">
                        {{$message}}
                    </p>
                    @enderror
                    <input type="text" name="email" class="form-control mt-2  @error('email') border border-danger @enderror" id="email" placeholder="Email" value="{{old('email')}}">
                    @error('email')
                    <p class="text-danger mx-1 mb-0">
                        {{$message}}
                    </p>
                    @enderror
                    <input type="password" name="password" class="form-control mt-2  @error('password') border border-danger @enderror" id="password" placeholder="Hasło">
                    @error('password')
                    <p class="text-danger mx-1 mb-0">
                        {{$message}}
                    </p>
                    @enderror
                    <input type="password" name="password_confirmation" class="form-control mt-2 @error('password') border border-danger @enderror" id="password__confirmation" placeholder="Powtórz hasło">
                    <button type="sumbmit" class="btn btn-primary mt-3">Zarejestruj</button>
                </div>
            </form>
        </div>
    </div>
@endsection