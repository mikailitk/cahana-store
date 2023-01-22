@extends('adminlte::page')

@section('title', 'Dashboard Produk')

@section('content_header')
    <h1>Data Produk</h1>
@stop

@section('content')
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="col-12">
          <img src="/images/{{ $produk->gambar_produk }}" class="product-image" alt="Product Image">
        </div>
    </div>
    <div class="col-12 col-sm-6">
      <h3 class="my-3">{{ $produk->nama_produk }}</h3>
      <small>{{ $produk->jenis_produk }}</small>
      <p>{{ $produk->desc_produk }}</p>
      <hr>
      <div class="bg-gray py-2 px-3 mt-4">
        <h2 class="mb-0"> Rp. {{ $produk->harga_produk }}</h2>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop