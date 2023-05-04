@extends('layouts.app')
@section('title','Barang')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <br><br>
      @if(session('msg'))
      <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
        {{session('msg')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <h1 class="display-5 fw-bold lh-1 mb-3">Data Barang</h1>
      <hr class="my-4">
      <a href="barang/create " class="btn btn-dark mb-1">Tambah Barang</a>
        <div class="row mt-4">
            @foreach ($barang as $bar)
            <div class="col-md-3 mb-3">
                <div class="card" style="width: 18rem; height: 25rem;">
                    <div class="card-body text-center">
                        <img src="{{ url('img/') }}/{{ $bar->gambar }}" class="img-fluid" width="200" height="420">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $bar->nama_barang }}</strong> </h5>
                                <h5>Rp. {{ number_format($bar->harga) }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="barang/show/{{ $bar->id_barang }}" class="badge bg-info"><i class='bx bxs-show bx-sm' ></i></i></a>
                                <a href="barang/edit/{{ $bar->id_barang }}" class="badge bg-warning"><i class='bx bxs-pencil bx-sm'></i></a>
                                <a href="barang/destroy/{{ $bar->id_barang }}" class="badge bg-danger"><i class='bx bxs-trash bx-sm' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
  </div>
</div>
@endsection