<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('pages.auth.login'); 
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate(); 
        $request->session()->regenerate(); 
        $user = Auth::user(); // Récupère l'utilisateur authentifié

        if ($user->role === 'admin') {
            return redirect()->route('adminHome'); // Redirige l'admin vers sa page
        }

        return redirect()->route('user-profile');
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout(); // Déconnecte l'utilisateur
        $request->session()->invalidate(); // Invalide la session
        $request->session()->regenerateToken(); // Régénère le token CSRF

        return redirect()->route('home'); // Redirige vers la page d'accueil
    }
}
