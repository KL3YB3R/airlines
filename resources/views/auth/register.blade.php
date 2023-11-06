@extends('layouts.home')
@section('title-page', 'Login')

@section('content')
    <main class="bg-gray-800 flex justify-center items-center h-screen">
        <form action="/register" method="POST" class="bg-white p-5 w-1/4 rounded">
            @csrf
            <h1 class="border-b-2 border-gray-800 text-2xl pb-2 pl-2 mb-4">Register</h1>
            <aside class="flex flex-col mb-10 px-3">
                {{-- TODO USERNAME --}}
                <label for="username" class="pl-2 mb-1 text-md">Username</label>
                <input type="text" id="username" name="username" class="border border-gray-500 py-2 px-4 rounded-xl text-lg outline-none" placeholder="Type a username">

                {{-- TODO EMAIL --}}
                <label for="email" class="pl-2 mt-6 mb-1 text-md">Email</label>
                <input type="text" id="email" name="email" class="border border-gray-500 py-2 px-4 rounded-xl text-lg outline-none" placeholder="Type your email">

                {{-- TODO PASSWORD --}}
                <label for="password" class="pl-2 mt-6 mb-1 text-md">Password</label>
                <input type="password" id="password" name="password" class="border border-gray-500 py-2 px-4 rounded-xl text-lg outline-none" placeholder="Type username or Email">

                {{-- TODO PASSWORD REPEAT --}}
                <label for="password_confirmation" class="pl-2 mt-6 mb-1 text-md">Repeat Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="border border-gray-500 py-2 px-4 rounded-xl text-lg outline-none" placeholder="Type username or Email">
            </aside>
            <aside class="flex flex-grow justify-between items-center w-full px-3">
                <a href="/login" class="hover:font-semibold transition duration-300">Sign in</a>
                <button type="submit" class="py-2 px-4 border rounded border-blue-800 hover:bg-blue-800 hover:text-white transition duration-300">Register</button>
            </aside>

        </form>
    </main>
@endsection
