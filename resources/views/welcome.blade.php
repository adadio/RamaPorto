<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Syaputra Rama Adadio - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>

<body>
    <img src="{{ asset('images/NAGA TERB.gif') }}" class="flying-dragon" alt="Flying Dragon">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Syaputra Rama Adadio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/projects">Projects</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container text-center py-5">
            <div id="particles-js"></div>
            <img src="{{ asset('images/profile1-removebg-preview.png') }}" 
                alt="Foto Profil" 
                class="img-fluid rounded mb-3"
                style="width: 200px; height: 200px; object-fit: cover;">
            <h1 class="fw-bold">Syaputra Rama Adadio</h1>
            <p class="lead">Junior Full Stack Developer</p>
                <div class="container text-center">
                    <div data-aos="fade-up" data-aos-duration="1000">
                    <div class="p-4 rounded shadow-lg bg-dark bg-opacity-50 text-white" style="max-width: 600px; margin: auto;">
                        <p>
                        I am Syaputra Rama Adadio, a graduate of Informatics Engineering from Institut Bisnis Muhammadiyah Bekasi 
                        with a strong interest in automation technology, the Internet of Things (IoT), and IT in general. I have experience 
                        in designing and implementing practical technology solutions that integrate hardware and software, and am excited 
                        to continue developing my skills in various areas of IT.
                        </p>
                        <a href="/projects" class="mt-3 btn btn-primary btn-lg">View Projects</a>
                    </div>
                </div>
            
            </div>    
        </div>
    </header>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Pengalaman -->
            <div class="col-md-6 mb-4">
                <h2 class="mb-4">Pengalaman</h2>
                <div class="p-4 bg-white shadow-sm rounded">
                    <h5>Assistant Consultant</h5>
                    <p class="text-muted mb-1">PT Pentagraphi Parma • November 2024 - Januari 2025</p>
                    <li>Verified railway project work for PT KAI, covering signaling, telecommunications, overhead electric lines, and operational tasks.</li>
                    <li>Conducted administrative and field verification to ensure project compliance and accuracy.</li>
                    <li>Processed and validated large-scale data (approx. 100GB) within a two-month period, generating extensive Excel reports for project documentation.</li>
                    <li>Prepared presentation materials, project documentation, and comprehensive reports to support project evaluation and decision-making.</li>

                    <hr>

                    <h5>Digital Marketing Intern</h5>
                    <p class="text-muted mb-1">SD Muhammadiyah 01 Setu • Juni 2024 - Agustus 2024</p>
                    <p>Membantu tim pengembangan membuat aplikasi internal berbasis web.</p>
                </div>
            </div>

            <!-- Pendidikan -->
            <div class="col-md-6">
                <h2 class="mb-4">Pendidikan</h2>
                <div class="p-4 bg-white shadow-sm rounded">
                    <h5>Sarjana Komputer</h5>
                    <p class="text-muted mb-1">Institut Bisnis Muhammadiyah • 2020 - 2024</p>
                    <p>Lulus dengan skripsi berjudul "Sistem Pemberi Pakan Lele Otomatis Berbasis IoT".</p>

                    <hr>

                    <h5>SMA Negeri 11 Depok</h5>
                    <p class="text-muted mb-1">Jurusan IPA • 2016 - 2019</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<section class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">Video Skripsi: Alat Pakan Lele Otomatis</h2>
        <p class="mb-4">
            Proyek skripsi saya yang mengembangkan sistem pemberi pakan otomatis untuk budidaya lele.
        </p>
        <div class="mx-auto" style="max-width: 720px;">
            <div class="ratio ratio-16x9 animate__animated animate__fadeInUp animate__slow">
                <iframe src="https://www.youtube.com/embed/HcZxKtj5T7k"
                        title="YouTube video"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container text-center">
        <p class="mb-1">© {{ date('Y') }} Syaputra Rama Adadio | Junior Full Stack Developer</p>
        <p class="mb-1">
            <a href="mailto:radadio73@gmail.com" class="text-white text-decoration-none">
                radadio73@gmail.com
            </a>
        </p>
        <p>
            <a href="https://www.instagram.com/radadio/" target="_blank" class="text-white me-2">Instagram</a> |
            <a href="https://www.linkedin.com/in/syaputra-rama-adadio-767731234/" target="_blank" class="text-white ms-2">LinkedIn</a>
        </p>
    </div>
</footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script>
particlesJS("particles-js", {
  "particles": {
    "number": { "value": 50 },
    "size": { "value": 3 },
    "move": { "speed": 1 },
    "line_linked": { "enable": true },
    "color": { "value": "#ffffff" }
  }
});
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
