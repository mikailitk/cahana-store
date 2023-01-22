@extends('adminlte::page')

@section('title', 'Edit produk')

@section('content_header')
    <h1>Edit Produk</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Edit Produk</h3>
        </div>
        <!-- /.card-header -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('produks.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_produk" class="form-control" id="nama" placeholder="Nama Produk" value="{{ $produk->nama_produk }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                        <select name="jenis_produk" class="form-control" id="jenis">
                            <option value="Ikan" {{ $produk->jenis_produk=="Ikan" ? 'selected' : '' }}>Ikan</option>
                            <option value="Pelet" {{ $produk->jenis_produk=="Pelet" ? 'selected' : '' }}>Pelet</option>
                            <option value="Alat" {{ $produk->jenis_produk=="Alat" ? 'selected' : '' }}>Alat</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga_produk" class="form-control" id="harga" placeholder="Harga Produk" value="{{ $produk->harga_produk }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="desc_produk" class="form-control" id="desc" placeholder="Deskripsi Produk">{{ $produk->desc_produk }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                    <small style="color : red;">Pastikan gambar berukuran 600x800 agar rapi saat ditampilkan di website</small>
                        <input type="file" name="gambar_produk" class="form-control" id="gambar" placeholder="Gambar Produk">
                        <img src="/images/{{ $produk->gambar_produk }}" width="300px">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-right">Update</button>
            </div>
            <!-- /.card-footer -->
        </form>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop