@extends('adminlte::page')

@section('title', 'Tambah produk')

@section('content_header')
    <h1>Tambah Produk</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Tambah Produk Baru</h3>
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
        <form class="form-horizontal" action="{{ route('produks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_produk" class="form-control" id="nama" placeholder="Nama Produk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">                        
                        <select name="jenis_produk" class="form-control" id="jenis">
                            <option value="Ikan">Ikan</option>
                            <option value="Pelet">Pelet</option>
                            <option value="Alat">Alat</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga_produk" class="form-control" id="harga" placeholder="Harga Produk">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desc" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="desc_produk" class="form-control" id="desc" placeholder="Deskripsi Produk">
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-10">
                        <input type="file" name="gambar_produk" class="form-control" id="gambar" placeholder="Gambar Produk">
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info float-right">Tambah</button>
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