<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::latest()->paginate(5);

        return view('produks.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'harga_produk' => 'required',
            'desc_produk' => 'required',
            'gambar_produk' => 'required',
        ]);

        Produk::create($request->all());

        return redirect()->reoute('produks.index')->with('success', 'Produk baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('produks.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('produks.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required',
            'jenis_produk' => 'required',
            'harga_produk' => 'required',
            'desc_produk' => 'required',
            'gambar_produk' => 'required',
        ]);

        $produk->update($request->all());

        return redirect()->route('produks.index')->with('success', 'Produk berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $student->delete();

        return redirect()->route('produks.index')->with('success', 'Produk berhasil di hapus');
    }
}
