<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Route Racine du site
Route::get('/', [HomeController::class, 'index']);
Route::get('/a-propos', [HomeController::class, 'a_propos']);
Route::get('/contact', [HomeController::class, 'contact']);
// Routes pour les messages
Route::get('/messages', [HomeController::class, 'messages']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
