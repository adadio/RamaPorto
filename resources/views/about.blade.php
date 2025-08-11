@extends('layouts.app')

@section('content')
<section class="py-5 position-relative bg-light">
    <!-- Corner top-left -->
    <div class="position-absolute top-0 start-0 p-3">
        <div style="width:40px; height:40px; border-top:4px solid #007bff; border-left:4px solid #007bff;"></div>
    </div>

    <!-- Corner bottom-right -->
    <div class="position-absolute bottom-0 end-0 p-3">
        <div style="width:40px; height:40px; border-bottom:4px solid #007bff; border-right:4px solid #007bff;"></div>
    </div>

    <div class="container">
        <h2 class="mb-4 text-center">About Me</h2>
        <p class="lead text-center">
            Halo, saya <strong>Syaputra Rama Adadio</strong>, seorang <strong>Junior Full Stack Developer</strong> yang memiliki minat besar
            dalam pengembangan aplikasi web berbasis Laravel, Bootstrap, dan JavaScript.
        </p>
        <h3 class="mt-4">Technical Skills</h3>
    <ul>
        <li>Frontend: HTML5, CSS3, JavaScript (ES6+), Bootstrap 5</li>
        <li>Backend: PHP, Laravel</li>
        <li>Database: MySQL</li>
        <li>Tools: Git, VS Code</li>
    </div>
</section>

@endsection
