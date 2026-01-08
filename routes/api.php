<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menus', [MenuController::class, 'index']);

Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Contoh mengambil data profil diri sendiri
    Route::get('/me', function (Request $request) {
        return $request->user();
    });
});

Route::middleware('auth:sanctum')->group(function () {
    // Route untuk mengambil data user yang sedang login
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Kamu bisa tambah route proteksi lainnya di sini, misal:
    // Route::post('/checkout', [OrderController::class, 'store']);
});