<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
            // Vérifie si un utilisateur est connecté ET s'il a le rôle 'admin'.
        if (!Auth::check() || !Auth::user()->isAdmin()) {
                // Si l'utilisateur n'est pas connecté ou n'est pas admin,
                // le rediriger vers la page d'accueil ou une page d'erreur 403.
                return redirect('/')->with('error', 'Accès non autorisé.'); // Ou abort(403);
        }

        return $next($request); // L'utilisateur est admin, la requête continue.
    }
}
