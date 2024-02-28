<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Airline;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register');
    }

    public function store(RegisterRequest $request)
    {
        $register = User::create($request->addStatusToUser());
        $airline = Airline::create($request->addEmailToAirline());
        if ($register && $airline) return redirect('/login')->with('success', 'Account created successfully');
        return redirect('/register')->withErrors('An unexpected error has occurred:');
    }
}