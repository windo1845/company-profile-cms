<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Footer;

// Route::get('/', function () { return view('welcome'); });

// Tampilkan frontend.home sebagai landing page
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', function () { return redirect('/home'); });

// menu admin ke cms
// Route::redirect('/admin', '/admin');
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');

// menu edit admin
Route::view('/register', 'auth.register')->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

Route::get('/{slug}', [HomeController::class, 'showPage']);
Route::get('/products/{product}', [HomeController::class, 'product'])->name('products.show');


