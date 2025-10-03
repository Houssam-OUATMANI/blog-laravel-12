<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // *** Affiche la page d'inscription
    public function register() {
        return view("register");
    }


    // *** Gerer l'inscription
    public function handleRegister(RegisterFormRequest $request) {
        $user_data = $request->validated();
        User::query()->create($user_data);
        return redirect()->route("home")->with("success", "Votre compte a bien ete cree");
    }

  // *** Affiche la page de connexion
    public function login() {

    }

      // *** Gerer la connexion
    public function handleLogin() {

    }
}
