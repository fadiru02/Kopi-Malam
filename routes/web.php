<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

// --- HALAMAN UTAMA ---
Route::get('/', function () {
    return view('welcome');
})->name('home');

// --- HALAMAN LOGIN ---
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect('/');
    }
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->remember)) {
        $request->session()->regenerate();

        $user = Auth::user();

        // Redirect Otomatis Berdasarkan Role
        return match ($user->role) {
            'owner' => redirect()->intended('/admin'),
            'employee' => redirect()->intended('/employee'),
            'customer' => redirect()->intended('/'),
            default => redirect('/'),
        };
    }

    return back()->withErrors(['email' => 'Kredensial tidak cocok.']);
});

// --- HALAMAN REGISTER ---
Route::get('/register', function () {
    if (Auth::check()) {
        return redirect('/');
    }
    return view('auth.register');
})->name('register');

Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', 'min:8'],
    ]);

    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role' => 'customer', // Pastikan role diisi eksplisit jika tidak ada default di database
    ]);

    Auth::login($user);

    // Jangan langsung ke '/', pastikan session tersimpan
    $request->session()->regenerate();

    return redirect()->intended('/');
});

// --- LOGOUT ---
Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');