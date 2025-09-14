@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Selamat Datang di Home Mini Project</h1>
    <p>Ini adalah contoh halaman menggunakan layout master dan komponen blade.</p>

    <x-alert type="success">
        Data berhasil disimpan!
    </x-alert>

    <x-alert type="danger">
        Terjadi kesalahan saat memproses data.
    </x-alert>

    <x-alert>
        Default alert (primary).
    </x-alert>
@endsection