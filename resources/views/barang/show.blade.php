@extends('layouts.app')
@section('title','Detail')
@section('content')
<div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-md-6">
            <div class="card py-3 gambar">
                <div class="card-body">
                    <img src="{{ url('img/') }}/{{ $barang->gambar }} " class="img-fluid" width="300" height="600">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><span class="badge bg-dark"> Detail Barang</span>
            </h1>
            <h1><strong>{{ $barang->nama_barang }}</strong></h1>
            <h4>Rp. {{ number_format($barang->harga) }} per hari</h4>
            <h4>
                Stok {{ $barang->stok }}
                @if($barang->stok > 0)
                <span class="badge bg-success">Tersedia</span>
                @else
                <span class="badge bg-danger">Habis</span>
                @endif
            </h4>
            <h4>{{ $barang->deskripsi }}</h4>
            <a class="nav-link" href="/barang">
                <button class="btn btn-dark"  type="submit">
                    <i class='bx bx-arrow-back'></i> Kembali
                </button>
            </a>
        </div>
    </div>
</div>
@endsection