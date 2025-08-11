<!DOCTYPE html>
<html lang="en">
<head>
    <title>Syaputra Rama Adadio - Junior Full Stack Developer</title>
    <meta name="description" content="Portfolio resmi Syaputra Rama Adadio, Junior Full Stack Developer.">
    <meta name="keywords" content="Syaputra Rama Adadio, Portfolio, Web Developer, Laravel, Bootstrap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portfolio' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Syaputra Rama Adadio</a>
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

<!-- Tempat isi konten -->
<main class="py-4">
    @yield('content')
</main>

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
            <a href="https://github.com/username" target="_blank" class="text-white me-2">GitHub</a> |
            <a href="https://www.linkedin.com/in/syaputra-rama-adadio-767731234/" target="_blank" class="text-white ms-2">LinkedIn</a>
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>
<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth"
      });
    });
  });
</script>
</body>
</html>
