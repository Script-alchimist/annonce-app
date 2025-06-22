<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'pages.container')->name('home');
Route::view('/annonce/article/{id}', 'pages.article')->name('article');

Route::view('/annonce/owner', 'pages.profile.profiLayout')->name('LayoutProfile');
Route::view('/annonce/owner/profile', 'pages.profile.manager.profile')->name('user-profile');
Route::view('/annonces/owner/annonces', 'pages.profile.manager.annonces')->name('user-annonces');
Route::view('/annoncs/owner/annonce/create', 'pages.profile.manager.create')->name('create-annonce');
Route::view('/annonces/owner/annonce/edit', 'pages.profile.manager.edit')->name('edit-annonce');
Route::view('/annonce/owner/annonces/delete/{id}', 'pages.profile.manager.delete')->name('delete-annonce');

Route::get('/register/sign-in', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register/sign-in', [RegisteredUserController::class, 'store']);
Route::view('/connect/signup', 'Pages.auth.login')->name('login');
//Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
//Route::post('/login', [AuthenticatedSessionController::class, 'store']); // Gère la soumission du formulaire de connexion
//Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');


Route::view('/annonce/app/admin', 'pages.admin.home')->name('adminHome');
Route::view('/annonce/app/admin/annonces', 'pages.admin.annonces')->name('admin-annonces');

// Les routes pour les utilisateurs simples sont sous 'auth' seulement
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard'); // Votre tableau de bord utilisateur général
        })->name('dashboard');

        // ... vos routes de profil et d'annonces utilisateur
        Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
        Route::get('/ads/create', [App\Http\Controllers\AdController::class, 'create'])->name('ads.create');
        // etc.
    });
    
//
Route::middleware(['auth', 'is_admin'])->group(function () {
    // Toutes les routes à l'intérieur de ce groupe ne seront accessibles qu'aux administrateurs connectés
    Route::get('/admin/dashboard', function () {
        return "Bienvenue sur le tableau de bord administrateur !"; // Ou une vue Blade pour l'admin
    })->name('admin.dashboard');

        // Exemple: Gestion des utilisateurs (uniquement pour les admins)
    Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
});