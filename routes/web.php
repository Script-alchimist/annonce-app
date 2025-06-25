<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\Auth\LoginController as Login;
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

Route::get('/', [AnnonceController::class,'index'])->name('home');
Route::get('/annonce/article/{id}', [AnnonceController::class,'show'])->name('article');

Route::get('/annonce/owner/profile', [AuthController::class,'profile'])->name('user-profile');
Route::get('/annonces/owner/annonces', [AnnonceController::class,'userAnnonces'])->name('user-annonces');
Route::get('/annonces/owner/annonce/create', [AnnonceController::class,'create'])->name('create-annonce');
Route::post('/annonces/owner/annonce/create', [AnnonceController::class,'store']);
Route::get('/annonces/owner/annonce/edit/{id}/edit', [AnnonceController::class,'edit'])->name('annonce.edit');
Route::put('/annonces/owner/annonce/edit/{id}/edit', [AnnonceController::class,'update']);
Route::delete('/annonces/owner/annonces/delete/{id}/delete', [AnnonceController::class,'destroy'])->name('delete-annonce');
Route::get('/annonces/search/res', [AnnonceController::class,'search'])->name('search-annonce');

Route::get('/register/sign-in', [AuthController::class, 'create'])->name('register');
Route::post('/register/sign-in', [AuthController::class, 'store']);

Route::middleware('guest')->group(function () {
    Route::get('/login/sign-up', [Login::class, 'login'])->name('login');
    Route::post('/login/sign-up', [Login::class, 'store']);
});
Route::post('/annonce-app/logout', [Login::class, 'destroy'])->name('logout');


Route::view('/annonce/app/admin', 'pages.admin.home')->name('adminHome');
Route::view('/annonce/app/admin/annonces', 'pages.admin.annonces')->name('admin-annonces');

