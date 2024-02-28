@extends('layouts.home')


@section('content')
    <p class="mb-16 opacity-0">Lorem ipsum dolor sit </p>
    <main class="flex justify-start items-start w-11.5/12 mx-auto">
        {{-- ! FORMULARIO PARA MOSTRAR LA INFORMACION DEL CARNET DEL PILOTO --}}
        <form method="POST" class="w-3/12 flex flex-col bg-gray-100 border border-forest shadow-lg rounded-l-lg rounded-tr-none p-3">
            <h1 class="text-center text-xl mb-5 font-bold">Pilot ID</h1>
            {{-- ? CONTENEDOR PARA VER Y ADJUNTAR LA IMAGEN DEL PILOTO --}}
            <figure class="w-36 h-36 rounded-md flex justify-center items-center mx-auto mb-8">
                <img src="/assets/img/1.jpg" alt="" class="w-full h-full rounded-md">
            </figure>
            {{-- ? CONTENEDOR PARA VER LA INFORMACION RESTANTE DEL CARNET DEL PILOTO --}}
            <article class="w-7/12 mx-auto text-center">
                <label for="pilotId" class="text-xs font-semibold">Pilot Key</label>
                <aside class="relative mt-1">
                    <input type="text" id="pilotId" class="border border-gray-400 rounded-md p-1 px-2 text-sm focus:outline-none">
                    <button class="absolute right-2.5 bg-gray-200 px-1 py-0.5 rounded-r-md border  border-gray-400" title="Genera un Codigo Aleatorio"><span class="icon-key"></span></button>
                </aside>
            </article>
            <article class="w-12/12 mt-5 grid grid-cols-2 gap-5">
                <aside class="flex flex-col">
                    <label for="#" class="text-xs font-semibold pl-1">First Names</label>
                    <input type="text" class="border border-gray-400 rounded-md p-1 px-2 mt-1 text-sm focus:outline-none">
                </aside>
                <aside class="flex flex-col">
                    <label for="#" class="text-xs font-semibold pl-1">Last Names</label>
                    <input type="text" class="border border-gray-400 rounded-md p-1 px-2 mt-1 text-sm focus:outline-none">
                </aside>
            </article>
            <article class="w-12/12 mt-5 grid grid-cols-2 gap-5">
                <aside class="flex flex-col">
                    <label for="#" class="text-xs font-semibold pl-1">Date of Birth</label>
                    <input type="date" class="border border-gray-400 rounded-md p-1 px-2 mt-1 text-sm focus:outline-none">
                </aside>
                <aside class="flex flex-col">
                    <label for="#" class="text-xs font-semibold pl-1">Nationality</label>
                    <input type="text" class="border border-gray-400 rounded-md p-1 px-2 mt-1 text-sm focus:outline-none">
                </aside>
            </article>
            <button class="border-2 border-forest mt-8 mb-2 rounded-lg w-max mx-auto px-5 py-1.5 bg-forest font-semibold text-white hover:opacity-75 hover:border-forest transition-all duration-150">Save</button>
        </form>
        <section class="w-8/12 flex flex-col">
            <article class="flex assign-container">
                <a href="#" class="bg-gray-100 border border-gray-200 px-2 pl-3 pr-4 py-2 assign-active transition-all duration-150 text-md">Basic Information</a>
                <a href="#" class="bg-gray-100 border border-gray-200 px-2 pl-3 pr-4 py-2 assign-active transition-all duration-150 text-md -ml-2">Personal Information</a>
            </article>
            <form action="#" method="POST" class="w-full border border-forest h-full p-3 rounded-r-lg">

            </form>
        </section>
    </main>

    <script type="module" src="/assets/js/assignActive.js"></script>
@endsection
