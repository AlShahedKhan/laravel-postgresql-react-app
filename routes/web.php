<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MultiverseController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::get('multiverse/create', function () {
        return Inertia::render('multiverse/create');
    })->name('multiverse.create');
    Route::get('multiverse', [MultiverseController::class, 'index'])->name('multiverse.index');
    Route::post('multiverse', [MultiverseController::class, 'store'])->name('multiverse.store');

});
// 
require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
