<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequestForm;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view("login");
    }

      // *** Gerer la connexion
    public function handleLogin(LoginRequestForm $request) {
         // *** Validation des donnnees
          $user_data = $request->validated();
          $is_authenticated = Auth::attempt($user_data);

          if($is_authenticated) {
            session()->regenerate();
            $firstname = Auth::user()->firstname;
            return redirect()->route("home")->with("success", "Bonjour $firstname");
          }

          return redirect()
                    ->route("auth.login")
                    ->withInput($user_data)
                    ->with("error", "Identifiants invalide");


    }
}
