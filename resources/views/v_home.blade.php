<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
        }

        .navbar-brand {
            color: #fff;
            font-size: 24px;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .welcome-section {
            display: flex;
            margin: 50px;
            justify-content: space-between;
            align-items: center;
            border-style: solid;
            padding: 50px;
            background-color: #f0f0f0;
        }

        .welcome-text {
            font-size: 24px;
        }

        .welcome-heading {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .profile-img {
            max-width: 100%;
            height: auto;
        }

        .arrow-btn {
            font-size: 24px;
            color: #333;
            background-color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .section-image {
            text-align: center;
        }

        /* course css */
        .detail-couse {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Course</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Task/Quiz</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Forum</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Report</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i> Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Profile Details</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="welcome-content">
            <div class="welcome-text">Selamat Datang</div>
            <div class="welcome-heading">Nama User Yang Login</div>
            <button class="arrow-btn">Pergi ke Course Saya <i class="fas fa-arrow-right"></i></button>
        </div>
        <div class="section-image">
            <img src="gambar.jpg" alt="Profile Image" class="profile-img">
        </div>
    </section>

    <section class="welcome-section">
        <div class="course-heading">
            <div class="welcome-heading">Course</div>
            <div class="welcome-text">TA 2023/2024 Semester Genap</div>
            <div class="detail-couse">
                <div class="card mr-5 mb-5">
                    <div class="card-header bg-primary text-white">
                        Bagian Atas
                    </div>
                    <div class="card-body">
                        <p>Manajemen Sosial</p>
                        <p>Kelas X IPS</p>
                        <div class="progress">
                            <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%;"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Persentasi <span id="progressPercentage">0</span>% complete</p>
                    </div>
                </div>
                <div class="card mr-5 mb-5">
                    <div class="card-header bg-primary text-white">
                        Bagian Atas
                    </div>
                    <div class="card-body">
                        <p>Manajemen Sosial</p>
                        <p>Kelas X IPS</p>
                        <div class="progress">
                            <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%;"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Persentasi <span id="progressPercentage">0</span>% complete</p>
                    </div>
                </div>
                <div class="card mr-5 mb-5">
                    <div class="card-header bg-primary text-white">
                        Bagian Atas
                    </div>
                    <div class="card-body">
                        <p>Manajemen Sosial</p>
                        <p>Kelas X IPS</p>
                        <div class="progress">
                            <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%;"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Persentasi <span id="progressPercentage">0</span>% complete</p>
                    </div>
                </div>
                <div class="card mr-5 mb-5">
                    <div class="card-header bg-primary text-white">
                        Bagian Atas
                    </div>
                    <div class="card-body">
                        <p>Manajemen Sosial</p>
                        <p>Kelas X IPS</p>
                        <div class="progress">
                            <div id="progressBar" class="progress-bar" role="progressbar" style="width: 0%;"
                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p>Persentasi <span id="progressPercentage">0</span>% complete</p>
                    </div>
                </div>
                <script>
                    // Mendapatkan elemen progres dan persentase
                    var progressBar = document.getElementById('progressBar');
                    var progressPercentage = document.getElementById('progressPercentage');

                    // Nilai persentase progres
                    var percentage = 50; // Ganti dengan persentase yang diinginkan

                    // Mengatur nilai persentase dan lebar progres
                    progressBar.style.width = percentage + '%';
                    progressPercentage.textContent = percentage;
                </script>


            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>