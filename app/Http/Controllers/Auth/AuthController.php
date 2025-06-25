<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('pages.auth.signin');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'], 
            'lastname' => ['required', 'string', 'max:255'],  
            'profession' => ['required', 'string', 'max:255'], 
            'phone' => ['required', 'string', 'max:20', 'unique:'.User::class], 
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'profession' => $request->profession,
            'phone' => $request->phone,
            'name' => $request->firstname . ' ' . $request->lastname, // Concaténation pour le champ 'name'
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Défini explicitement comme 'user' par défaut pour les nouvelles inscriptions
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('user-profile')->with('success', 'Inscription réussie ! Bienvenue, ' . $user->firstname . ' !');
    }

    public function profile()
    {
        if (Auth::check()) { 
            $user = Auth::user(); 

            // Vous pouvez maintenant accéder à toutes les propriétés de l'utilisateur
            $lastname = $user->id;
            $firstname = $user->name; 
            $email = $user->email;
            $profession = $user->profession;
            $phone = $user->phone; 

            // Par exemple, passer les informations à une vue
            return view('pages.profile.manager.profile', compact('user'));

        } else {
            // L'utilisateur n'est pas connecté
            return redirect()->route('login');
        }
    }
}
