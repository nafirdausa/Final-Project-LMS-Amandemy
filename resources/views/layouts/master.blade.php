<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .welcome-section {
            background-color: #f0f0f0;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 20px;
            border-radius: 10px;
        }
        .welcome-section h1 {
            margin: 0;
        }
        .courses-section {
            margin: 20px;
        }
        .course-card {
            background-color: #ccc;
            padding: 20px;
            border-radius: 10px;
            margin-right: 20px;
            flex: 1;
        }
        .course-card-container {
            display: flex;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-between">
                <div>
                    <img src="/assets/img/logo_lms1.png" alt="Logo" width="60px">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Course</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Raport</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portofolio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="" alt="Profil" width="50px">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="pt-3 pb-3">
            <div class="grid mx-4 mt-4">
                <div class="row row-gap-4">
                    <div class="col-3">
                        <div class="card">
                            <img src="/assets/img/logo_lms1.png" alt="Logo" width="100px">
                            <p class="card-text">E-LEARNING Fakultas Teknik & Informasi Jendral Achmad Yani, Yogyakarta. Learning Management System ini dikelola oleh Pengelola Laboratorium & TIK, Fakultas Teknik</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <h5 class="card-title">Pranala</h5>
                            <ul class="list-group">
                                <li class="list-group-item">SMA N Madesu</li>
                                <li class="list-group-item">IPA</li>
                                <li class="list-group-item">IPS</li>
                                <li class="list-group-item">Bahasa</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <h5 class="card-title">Ikuti Kami</h5>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="#"><img class="mb-1 me-2" src="/assets/icon/facebook_symbol.svg.png" alt="Facebook" width="20">Facebook</a></li>
                                <li class="list-group-item"><a href="#">Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <h5 class="card-title">SMA Negeri Madesu</h5>
                            <p>Jl. Siliwangi km 0.7 Ringroad Barat, Banyuraden, Gamping, Daerah Istimewa Yogyakarta 55293</p>
                            <p>Phone: (+62-254) 052-540</p>
                            <p>Email: mds@madesu.ac.id</p>
                        </div>
                    </div>
                    <p class="text-center">Fakultas Teknik & Teknologi Informasi, Universitas Jenderal Achmad Yani Yogyakarta © 2018 - 2023.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>