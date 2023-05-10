@extends('layouts.app')
@section('title','Packet')
@section('content')
<div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-md-6">
            <h1 class="display-5 fw-bold lh-1 mb-3"><span class="badge bg-dark"> Detail packet</span>
            </h1>
            <h1><strong>{{ $->name }}</strong></h1>
            <h4>Rp. {{ number_format($packet->price)/($packet->unit) }} per hari</h4>if
            </h4>
            <h4>{{ $packet->desc }}</h4>
            <a class="nav-link" href="/packet">
                <button class="btn btn-dark"  type="submit">
                    <i class='bx bx-arrow-back'></i> Kembali
                </button>
            </a>
        </div>
    </div>
</div>
@endsection