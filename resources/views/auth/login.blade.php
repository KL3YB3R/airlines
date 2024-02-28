@extends('layouts.home')
@section('title-page', 'Login')

@section('content')
    <main class="bg-seaFoam flex justify-center items-center h-screen">
        <form action="/login" method="POST" class="bg-white p-5 w-1/4 rounded-lg shadow-md">
            @csrf
            @if (session('success'))
                <aside class="p-3 bg-green-200 mb-4 rounded-lg">
                    <p class="font-semibold text-green-900">{{session('success')}}</p>
                </aside>
            @endif
            <h1 class="border-b-2 border-forest text-forest font-bold text-2xl pb-2 pl-2 mb-6">Sign in</h1>
            <aside class="flex flex-col mb-5">
                <label for="name" class="pl-2 mb-1 text-sm @error('password') text-invalid @endError">Username or Email</label>
                <input type="text" id="name" name="name" class="border border-gray-500 p-2 px-4 rounded-xl text-md outline-none @error('password') is-invalid @endError" placeholder="Type username or Email">
                <label for="password" class="pl-2 mt-4 mb-1 text-sm @error('password') text-invalid @endError">Password</label>
                <input type="password" id="password" name="password" class="border border-gray-500 p-2 px-4 rounded-xl text-md outline-none @error('password') is-invalid @endError" placeholder="Type username or Email">
            </aside>
            {{-- ! OBTENER ERRORES DE LOS CONTROLADORES --}}
            @if ($errors->any())
                <div class="flex flex-col w-full py-2 px-2 bg-red-200 rounded-lg mb-5">
                    @foreach ($errors->all() as $error)
                        <li class="list-none text-red-700 text-sm font-semibold mb-1"> - {{$error}}</li>
                    @endforeach
                </div>
            @endif
            <aside class="flex flex-grow justify-between items-center w-full">
                <button class="py-2 px-4 border-2 rounded-md border-forest bg-forest hover:bg-white text-white hover:text-black transition duration-300">Sign in</button>
                <a href="/register" class="hover:font-semibold transition duration-300">Sign up</a>
            </aside>
        </form>
    </main>
@endsection
