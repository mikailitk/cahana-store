<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $produks = Produk::inRandomOrder()->take(5)->get();
        $ikans = Produk::all()->where('jenis_produk', 'Ikan');
        $pelets = Produk::all()->where('jenis_produk', 'Pelet');
        $alats = Produk::all()->where('jenis_produk', 'Alat');
        $all_produks = Produk::all();

        return view('dashboard.index', compact('produks', 'ikans', 'pelets', 'alats', 'all_produks'));
    }
    
}
