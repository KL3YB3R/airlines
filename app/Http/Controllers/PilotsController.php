<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PilotsController extends Controller
{
    // ! FUNCION PARA MOSTRAR EL REGISTRO DE PILOTOS
    public function showRegister()
    {
        if (Auth::check())
            return view("airline.pilotsRegister");
        return view("auth.login");
    }

    // ! FUNCION PARA MOSTRAR EL DIRECTORIO DE LOS PILOTOS
    public function showList()
    {
        if (Auth::check())
            return view("airline.pilotsDirectory");
        return view("auth.login");
    }
}
