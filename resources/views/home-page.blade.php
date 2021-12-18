@extends('layouts.main')

@section('container')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-2">
      <div class="container-fluid container">
        <a class="navbar-brand text-white text-uppercase" href="/">Sistem Pendukung Keputusan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-lg-auto text-uppercase text-decoration-none">
            <a class="nav-link me-lg-5 border-bottom btn-outline-danger text-white" href="/home" data-tilt>Home</a>
            <a class="nav-link me-lg-5 border-bottom btn-outline-danger text-white" href="{{ route('login') }}" data-tilt>Login</a>
            <a class="btn btn-danger border-bottom border-light me-lg-5 text-white border-2" href="{{ route('register') }}" data-tilt>Register</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="container bg-danger rounded-3 mt-5">
      <div class="p-5 mb-4 rounded-3 d-flex justify-content-center">
        <div class="container-fluid py-5">
          <a href="/" class="display-4 fw-bold text-white text-decoration-none">Sistem Pendukung Keputusan</a>
          <p class="text-white h3">Selamat Datang di Sistem Pendukung Keputusan Tanaman Sayur</p>
          {{-- <p class="text-white h3">Website ini di Kembangkan oleh <a href="https://perpus.samarindakota.go.id/" class="text-white text-decoration-none">Dinas Perpustakaan Kota Samarinda</a> pada Tahun 2021.</p> --}}
        </div>
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Footer -->
    <footer class="footer text-center text-white mb-lg-5 mt-lg-4">
      &copy; All Rights Reserved by : Nirda Yulia Putri
    </footer>
    <!-- End Footer -->
@endsection
