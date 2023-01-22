<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $produks = Produk::all()->random(5);
        $ikans = Produk::all()->where('jenis_produk', 'Ikan');
        $pelets = Produk::all()->where('jenis_produk', 'Pelet');
        $alats = Produk::all()->where('jenis_produk', 'Alat');
        $all_produks = Produk::all();

        return view('dashboard.index', compact('produks', 'ikans', 'pelets', 'alats', 'all_produks'));
    }

    public function ikan(){
        $produks = Produk::where('jenis_produk', 'Ikan')->get();

        return view('dashboard.jenis', compact('produks'));
    }

    
}
