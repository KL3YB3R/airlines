@extends('layouts.home')
@section('title-page', 'Login')

@section('content')
    <main class="bg-gray-800 flex justify-center items-center h-screen">
        <form action="/login" method="POST" class="bg-white p-5 w-1/4 rounded">
            @csrf
            <h1 class="border-b-2 border-gray-800 text-2xl pb-2 pl-2 mb-4">Login</h1>
            <aside class="flex flex-col mb-10">
                <label for="name" class="pl-2 mb-1 text-md">Username or Email</label>
                <input type="text" id="name" name="name" class="border border-gray-500 p-2 rounded-xl text-lg outline-none" placeholder="Type username or Email">
                <label for="password" class="pl-2 mt-6 mb-1 text-md">Password</label>
                <input type="password" id="password" name="password" class="border border-gray-500 p-2 rounded-xl text-lg outline-none" placeholder="Type username or Email">
            </aside>
            <aside class="flex flex-grow justify-between items-center w-full">
                <button class="py-2 px-4 border rounded border-blue-800 hover:bg-blue-800 hover:text-white transition duration-300">Login</button>
                <a href="#" class="hover:font-semibold transition duration-300">Sign up</a>
            </aside>
        </form>
    </main>
@endsection
