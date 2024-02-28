<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth/login");
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials))
            return redirect()->to('/login')->withErrors('Incorrect Username or Password');

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user)
    {
        session([
            'id' => $user->id,
            'email' => $user->email,
            'userType' => $user->user_type
        ]);
        if ($user->status === "Active") return redirect(strtolower($user->user_type) . '/home');
    }
}

/*
    1) usuario y contraseña incorrectas
    2) usuario deshabilitado
    3) redireccionar dependiendo el tipo de usuario
*/