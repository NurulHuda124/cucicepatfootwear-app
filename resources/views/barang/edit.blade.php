@extends('layouts.app')
@section('title','Barang')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br>
            <h1 class="display-5 fw-bold lh-1 mb-3">Edit Data Barang</h1>
            <hr class="my-4">
            <form action="/barang/update/" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" 
                    placeholder="Nama Barang" value="{{ $barang->nama_barang }}">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Sewa Barang</label>
                    <input type="text" class="form-control" name="harga" 
                    placeholder="Harga Sewa Barang" value="{{  $barang->harga }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Barang</label>
                    <input type="text" class="form-control" name="deskripsi" 
                    placeholder="Deskripsi Barang" value="{{ $barang->deskripsi }}">
                </div>
                <div class="form-group">
                    <label for="stok">Stok Barang</label>
                    <input type="number" class="form-control" name="stok" 
                    placeholder="Stok Barang" value="{{ $barang->stok }}">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar Barang</label>
                    <input type="file" name="gambar" value="{{ $barang->gambar }}">
                </div>
                <button type="submit" class="btn btn-dark">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
