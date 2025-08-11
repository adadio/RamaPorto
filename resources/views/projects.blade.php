@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Projects</h1>
    <div class="row">
        <!-- Project 1
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">Sistem Informasi Pegawai</h5>
                    <p class="card-text">Aplikasi CRUD sederhana menggunakan Laravel & MySQL untuk manajemen data pegawai.</p>
                    <a href="#" class="btn btn-primary btn-sm">View on GitHub</a>
                </div>
            </div>
        </div>

        Project 2 
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Project 2">
                <div class="card-body">
                    <h5 class="card-title">Landing Page Perusahaan</h5>
                    <p class="card-text">Website profil perusahaan responsif menggunakan HTML, CSS, Bootstrap, dan JavaScript.</p>
                    <a href="#" class="btn btn-primary btn-sm">View Demo</a>
                </div>
            </div>
        </div>
        -->
        
        <!--Projek responsif-->
        <div class="col-md-4 mb-4" data-aos="zoom-in">
            <div class="card project-card">
                <img src="{{ asset('images/project1.jpg') }}" class="card-img-top img-fluid" alt="Project 3">
                <div class="card-body">
                    <h5 class="card-title">SISDAK RW 06</h5>
                    <p class="card-text">Sistem Data Penduduk Warga Jati Warna RW 06 untuk kemudaahan pendataan posyandu</p>
                    <a href="#" class="btn btn-outline-primary">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
