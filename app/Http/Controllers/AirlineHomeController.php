<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AirlineHomeController extends Controller
{
    public function show()
    {
        return view("airline.home");
    }

    public function getUserInformation()
    {
    }
}