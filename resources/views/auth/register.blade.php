@extends('layouts.home')
@section('title-page', 'Login')

@section('content')
    <main class="bg-seaFoam flex justify-center items-center h-screen">
        <form action="/register" method="POST" class="bg-white p-5 w-1/4 rounded-lg shadow-md">
            @csrf
            <h1 class="border-b-2 border-forest text-forest font-bold text-2xl pb-2 pl-2 mb-6">Register</h1>
            <aside class="flex flex-col mb-2 px-3">
                {{-- TODO USERNAME --}}
                <label for="username" class="pl-2 mb-1 text-sm @error('username') text-invalid @endError">Username</label>
                <input type="text" id="username" name="username" class="border border-gray-500 py-2 px-4 rounded-xl text-md outline-none @error('username') is-invalid @endError" placeholder="Type a username" value="{{old('username')}}">

                {{-- TODO EMAIL --}}
                <label for="email" class="pl-2 mt-4 mb-1 text-sm @error('email') text-invalid @endError">Email</label>
                <input type="text" id="email" name="email" class="border border-gray-500 py-2 px-4 rounded-xl text-md outline-none @error('email') is-invalid @endError" placeholder="Type your email">

                {{-- TODO PASSWORD --}}
                <label for="password" class="pl-2 mt-4 mb-1 text-sm @error('password') text-invalid @endError">Password</label>
                <input type="password" id="password" name="password" class="border border-gray-500 py-2 px-4 rounded-xl text-md outline-none @error('password') is-invalid @endError" placeholder="Type username or Email">

                {{-- TODO PASSWORD REPEAT --}}
                <label for="password_confirmation" class="pl-2 mt-4 mb-1 text-sm @error('password_confirmation') text-invalid @endError">Repeat Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="border border-gray-500 py-2 px-4 rounded-xl text-md outline-none mb-5 @error('password_confirmation') is-invalid @endError" placeholder="Type username or Email">

                {{-- ! OBTENER ERRORES DE LOS CONTROLADORES --}}
                @if ($errors->any())
                    <div class="flex flex-col w-full py-2 px-2 bg-red-200 rounded-lg">
                        @foreach ($errors->all() as $error)
                            <li class="list-none text-red-700 text-sm font-semibold mb-1"> - {{$error}}</li>
                        @endforeach
                    </div>
                @endif
            </aside>
            <aside class="flex flex-grow justify-between items-center w-full px-3">
                <a href="/login" class="hover:font-semibold transition duration-300">Sign in</a>
                <button type="submit" class="py-2 px-4 border-2 rounded border-forest bg-forest hover:bg-white text-white hover:text-black transition duration-300">Register</button>
            </aside>
        </form>

    </main>
@endsection
