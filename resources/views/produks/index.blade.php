@extends('adminlte::page')

@section('title', 'Dashboard Produk')

@section('content_header')
    <h1>Data Produk</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Data Produk</h3>

            <!-- <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                    </button>
                </div>
                </div>
            </div> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Jenis Produk</th>
                    <th>Harga Produk</th>                    
                    <th rowspan="3">Opsi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produks as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nama_produk }}</td>
                    <td>{{ $p->jenis_produk }}</td>
                    <td>Rp. {{ $p->harga_produk }}</td>
                    <td>
                    <form action="{{ route('produks.destroy',$p->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('produks.show',$p->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('produks.edit',$p->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>    
                </tr> 
                @endforeach               
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
    <!-- /.card -->
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop