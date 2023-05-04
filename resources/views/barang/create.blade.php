@extends('layouts.app')
@section('title','Barang')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br>
            <img src="{{ asset('img/logo1.png') }}" width="100" height="30">
            <h1 class="display-5 fw-bold lh-1 mb-3">Tambah Data Barang</h1>
            <hr class="my-4">
            <form action="/barang" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" 
                    placeholder="Nama Barang" value="{{ old('nama_barang') }}">
                </div>
                <div class="form-group">
                    <label for="harga">Harga Sewa Barang</label>
                    <input type="text" class="form-control" name="harga" 
                    placeholder="Harga Sewa Barang" value="{{ old('harga') }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi Barang</label>
                    <input type="text" class="form-control" name="deskripsi" 
                    placeholder="Deskripsi Barang" value="{{ old('deskripsi') }}">
                </div>
                <div class="form-group">
                    <label for="stok">Stok Barang</label>
                    <input type="number" class="form-control" name="stok" 
                    placeholder="Stok Barang" value="{{ old('stok') }}">
                </div>
                <div class="form-group">
                    <label for="gambar">Gambar Barang</label>
                    <input type="file" name="gambar">
                </div>
                <button type="submit" class="btn btn-dark">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
