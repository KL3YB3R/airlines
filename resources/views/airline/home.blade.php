@extends('layouts.home')

@section('content')
    <p class="mb-9 opacity-0">Lorem ipsum dolor sit </p>
    <main class="w-full mx-auto bg-gray-50 h-screen">
        @include('airline.layouts.panelLastFlights')
        {{-- ! SECCION PARA MOSTRAR LAS ESTADISTICAS DE VUELOS DEL MES Y LA CUIDADES --}}

    </main>
@endsection
