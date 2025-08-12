@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Projects</h1>
    <div class="row">
        
        <!--Projek responsif-->
        <div class="col-md-4 mb-4" data-aos="zoom-in">
            <div class="card project-card">
                <img src="{{ asset('images/project1.png') }}" class="card-img-top img-fluid" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">Tugas Kuliah Komunikasi Bisnis</h5>
                    <p class="card-text">Penjelasan dan Materi Terkait Komunikasi Bisnis dan Teknis</p>
                    <a href="https://kombis8.wordpress.com/" class="btn btn-outline-primary">Lihat</a>
                </div>
            </div>
        </div>

         <!--Projek responsif-->
        <div class="col-md-4 mb-4" data-aos="zoom-in">
            <div class="card project-card">
                <img src="{{ asset('images/project2.png') }}" class="card-img-top img-fluid" alt="Project 2">
                <div class="card-body">
                    <h5 class="card-title">SISDAK RW 06</h5>
                    <p class="card-text">Sistem Data Penduduk Warga Jati Warna RW 06 untuk kemudaahan pendataan posyandu</p>
                    <a href="https://github.com/adadio/SIDAK" class="btn btn-outline-primary">Lihat</a>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
