@extends('layouts.app')

@section('content')
    <div>
        <div class="container bg-light py-4 px-5">
            <h3 class="mb-3">Zaloguj się</h3>
            @if(session('status'))
                <div class="bg-danger text-white px-3 py-2">
                    {{session('status')}}
                </div>
            @endif
            <form action="{{route('login')}}" method="post" class="w-50">
                @csrf
                <div class="">
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
                    <button type="sumbmit" class="btn btn-primary mt-3">Zaloguj</button>
                </div>
            </form>
        </div>
    </div>
@endsection