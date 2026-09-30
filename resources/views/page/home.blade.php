@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <h2 class="display-5 text-primary mt-4">
                Selamat Datang
            </h2>

            <p class="text-muted">
                Ini adalah halaman utama project web profile
                prodi Sistem Informasi UNPAM.
            </p>

            <a href="{{ url('/profile') }}"
               class="btn btn-success">
                Lihat Detail
            </a>

        </div>

    </div>

</div>

@endsection