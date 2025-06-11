<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Footer;


// Tampilkan frontend.home sebagai landing page
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', function () { return redirect('/home'); });

// menu admin ke cms
// Route::redirect('/admin', '/admin');

// menu tambah admin cms
Route::view('/register', 'auth.register')->name('register');

// menu ubah akun profil untuk cms
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

// ubah bahasa indonesia dan inggris
Route::post('/set-language', function (Request $request) {
    $lang = $request->input('language', 'id'); 
    session(['lang' => $lang]);
    return back(); // kembali ke halaman sebelumnya
})->name('set.language');

Route::get('/{slug}', [HomeController::class, 'showPage']);
Route::get('/products/{product}', [HomeController::class, 'product'])->name('products.show');

