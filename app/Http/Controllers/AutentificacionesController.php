<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;


class AutentificacionesController extends Controller

{
    public function iniciarSesion(LoginFormRequest $request)
    {

        //login persomalizado
        if (Auth::attempt(['email' => $request->email, 'password' => $request->clave], false)) {
            return response()->json('has iniciado sesión', 200);
        }else{
            return response()->json(['errors'=>['login' => ['los datos que ingresaste son incorrectos']]], 422);
        }

        //   Auth::logout();   

        
    }
}

