<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        // Mengambil semua menu aktif
        $menus = Menu::where('is_active', true)->get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Menu KopagMalam',
            'data'    => $menus
        ]);
    }
}
