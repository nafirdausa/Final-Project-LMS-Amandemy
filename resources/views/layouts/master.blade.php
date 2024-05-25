<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="logo">LMS</div>
        <nav>
            <a href="{{ route('user_siswa.home') }}" class="active">Home</a>
            <a href="{{ route('dashboard.siswa.course') }}">Course</a>
            <a href="{{ route('dashboard.siswa.report') }}">Report</a>
            <a href="{{ route('dashboard.siswa.portofolio') }}">Portofolio</a>
            <div class="profile"><img src="image/profile.png" alt="Profile Picture"></div>
            
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-left">
            <div class="footer-logo">LMS</div>
            <p>E-LEARNING Fakultas Teknik & Teknologi Informasi Universitas Jenderal Achmad Yani, Yogyakarta. Jalan
                Ringroad Barat, Banyuraden, Gamping, Sleman, Yogyakarta</p>
        </div>
        <div class="footer-links">
            <h3>Pranala</h3>
            <ul>
                <li><a href="#">SMA N Madesu</a></li>
                <li><a href="#">IPA</a></li>
                <li><a href="#">IPS</a></li>
                <li><a href="#">Bahasa</a></li>
            </ul>
        </div>
        <div class="footer-social">
            <h3>Ikuti Kami</h3>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
        </div>
        <div class="footer-contact">
            <h3>SMA Negeri Madesu</h3>
            <p>Jl. Silangkar km 07 Ringroad Barat, Banyuraden, Gamping, Sleman, Yogyakarta</p>
            <p>Phone: +62-251-025-540</p>
            <p>Email: mnd@smadesu.id</p>
        </div>
    </footer>
</body>

</html>