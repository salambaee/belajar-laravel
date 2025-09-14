@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <div class="text-center py-5">
        <h1 class="display-4 fw-bold text-success mb-3">🐾 Selamat Datang di <span class="text-primary">MusangStore</span></h1>
        <p class="lead text-muted">Tempat jual beli musang terpercaya sejak 2025</p>

        <div class="mt-4">
            <a href="/musang" class="btn btn-success btn-lg me-2 shadow">
                🦝 Lihat Daftar Musang
            </a>
            <a href="/contact" class="btn btn-outline-primary btn-lg shadow">
                📞 Hubungi Kami
            </a>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h5 class="card-title text-primary">Musang Sehat</h5>
                    <p class="card-text text-muted">Semua musang yang dijual dijamin sehat & aktif.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h5 class="card-title text-success">Harga Terjangkau</h5>
                    <p class="card-text text-muted">Kami menawarkan harga yang kompetitif dan transparan.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h5 class="card-title text-warning">Garansi</h5>
                    <p class="card-text text-muted">Ada garansi kesehatan untuk setiap pembelian musang.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
