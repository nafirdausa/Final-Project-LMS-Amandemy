<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Diskusi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
}

header {
    border-bottom: 1px solid #e0e0e0;
}

header .logo {
    font-size: 1.5rem;
    font-weight: bold;
}

header nav a {
    color: #333;
    text-decoration: none;
}

header nav a:hover {
    text-decoration: underline;
}

.forum-card {
    background: #f8f9fa;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.forum-card .discussion {
    border-bottom: 1px solid #e0e0e0;
}

.forum-card .discussion:last-child {
    border-bottom: none;
}

.avatar {
    width: 40px;
    height: 40px;
}

footer {
    border-top: 1px solid #e0e0e0;
}

footer h5 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
}

footer address {
    font-style: normal;
}

    </style>
    <header class="bg-light py-2">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo">Logo</div>
            <nav>
                <a href="#" class="mx-3">Home</a>
                <a href="#" class="mx-3">Course</a>
                <a href="#" class="mx-3">Report</a>
                <a href="#" class="mx-3">Portofolio</a>
                <img src="profile.jpg" alt="Profile" class="rounded-circle" style="width: 30px; height: 30px;">
            </nav>
        </div>
    </header>

    <main class="container mt-5">
        <h1>Forum Diskusi</h1>
        <div class="forum-card p-3 mb-3">
            <h3>Manajemen Sosial (SC523) - IPS</h3>
            <div class="discussion p-2 my-2 bg-light">
                <div class="d-flex">
                    <div class="avatar bg-secondary rounded-circle mr-2"></div>
                    <div>
                        <p><strong>Mail bin mail</strong></p>
                        <p>Buka jasa joki ngerain tugas 5 ringgit 5 ringgit! Murah murah!</p>
                        <div class="replies pl-3">
                            <p><strong>Mei mei</strong> Saya mau saya mau, nak joki juga lah</p>
                            <p><strong>Fizi</strong> kenapa mei mei jadi macam ni?</p>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="text" class="form-control" placeholder="balas komentar">
                </div>
            </div>

            <div class="discussion p-2 my-2 bg-light">
                <div class="d-flex">
                    <div class="avatar bg-secondary rounded-circle mr-2"></div>
                    <div>
                        <p><strong>Ipin</strong> <span class="text-muted">7 Mei 2024 • 01:27</span></p>
                        <p>Asal usul manusia darimana cikgu?</p>
                        <div class="replies pl-3">
                            <!-- Replies can be added here -->
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="text" class="form-control" placeholder="balas komentar">
                </div>
            </div>

            <div class="discussion p-2 my-2 bg-light">
                <div class="d-flex">
                    <div class="avatar bg-secondary rounded-circle mr-2"></div>
                    <div>
                        <p><strong>Susanti</strong> <span class="text-muted">7 Mei 2024 • 01:27</span></p>
                        <p>p info?</p>
                        <img src="ini-gambar.jpg" alt="Gambar" class="img-thumbnail">
                    </div>
                </div>
                <div class="mt-2">
                    <input type="text" class="form-control" placeholder="balas komentar">
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>LOGO</h5>
                    <p>E-LEARNING Fakultas Teknik & Teknologi Informasi, Universitas Jenderal Achmad Yani, Yogyakarta. Learning Management System ini dikelola oleh Pengelola Laboratorium & TIK, Fakultas Teknik</p>
                </div>
                <div class="col-md-2">
                    <h5>Pranala</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">SMA N Madesu</a></li>
                        <li><a href="#">IPA</a></li>
                        <li><a href="#">IPS</a></li>
                        <li><a href="#">Bahasa</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h5>Ikuti Kami</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>SMA Negeri Madesu</h5>
                    <address>
                        Jl. Siliwangi km 0.7 Ringroad Barat, Banyuraden, Gamping, Daerah Istimewa Yogyakarta 55293<br>
                        Phone: (+62-254) 052-540<br>
                        Email: <a href="mailto:mds@madesu.ac.id">mds@madesu.ac.id</a>
                    </address>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; Fakultas Teknik & Teknologi Informasi, Universitas Jenderal Achmad Yani Yogyakarta © 2018 - 2023.</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
