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
                    <div class="p-4 rounded shadow-lg bg-dark bg-opacity-50 text-white" style="max-width: 800px; margin: auto;">
                        <p>
                        Hello my name is <strong>Syaputra Rama Adadio</strong> but you can call me <strong>Rama</strong>, a graduate of 
                        <strong>Informatics Engineering</strong> from <strong>Institut Bisnis Muhammadiyah Bekasi</strong> 
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
                    <li>Produced comprehensive event documentation for a school program using CapCut, including video editing and transitions to create a visually engaging recap.</li>
                    <li>Designed and implemented 5+ promotional Twibbons, driving awareness and participation in social media campaigns while reinforcing brand identity.</li>
                    <li>Developed 10+ visually appealing banners for Instagram, boosting event visibility and enhancing user engagement through compelling design elements.</li>
                    <li>Spearheaded the development of a dynamic school website on WordPress, incorporating a detailed School Profile page that highlights the institution's history and mission, an interactive School Activities page showcasing key events and programs, a personalized Principal’s Welcome Message page, and a seamless Registration button linking directly to the school’s enrollment form.</li>
                    <li>Created a custom review form for gathering feedback on the school's performance, improving communication and driving institutional improvement based on user insights.</li>
                </div>
            </div>

            <!-- Pendidikan -->
            <div class="col-md-6">
                <h2 class="mb-4">Pendidikan</h2>
                <div class="p-4 bg-white shadow-sm rounded">
                    <h5>Sarjana Komputer</h5>
                    <p class="text-muted mb-1">
                        Institut Bisnis Muhammadiyah Bekasi • 2020 - 2024
                        <br>IPK 3.57/4.00
                    </p>
                    <li>Designed and developed an automatic fish feeder system using Wemos D1 R32 and servo motors, ensuring precise and consistent feeding schedules.</li>
                    <li>Integrated a smartphone application via Blynk, enabling remote control and monitoring of the feeding process in real-time.</li>
                    <li>Proficient in developing websites using WordPress, PHP, CSS, and JavaScript, with a strong understanding of front-end and back-end integration.</li>

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
        <h2 class="mb-4">Thesis Video: Automatic Catfish Feeder</h2>
        <p class="mb-4">
            Developed an automatic fish feeder system using a Wemos D1 R32 microcontroller and servo motors, enabling accurate and consistent feeding schedules for optimal fish care.
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
<footer class="bg-dark text-white py-4 mt-2">
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
