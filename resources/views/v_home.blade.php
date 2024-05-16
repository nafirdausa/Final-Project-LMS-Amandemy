<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #e0e0e0;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img {
            height: 50px;
        }
        .nav-links {
            display: flex;
            gap: 20px;
        }
        .nav-links a {
            text-decoration: none;
            color: #000;
        }
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
        .footer {
            background-color: #e0e0e0;
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }
        .footer .column {
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="/course">Course</a>
            <a href="#">Task/Quiz</a>
            <a href="#">Forum</a>
            <a href="#">Report</a>
            <a href="#">Portofolio</a>
        </div>
    </div>

    <div class="welcome-section">
        <div>
            <p>Selamat Datang 👋</p>
            <h1>Killua Zoldyck</h1>
            <a href="#">Pergi ke course saya →</a>
        </div>
        <div class="welcome-image">
            <p>IMAGE</p>
        </div>
    </div>

    <div class="courses-section">
        <h2>Courses</h2>
        <p>TA 2023/2024 Semester Genap</p>
        <div class="course-card-container">
            <div class="course-card">
                <h3>Manajemen Sosial</h3>
                <p>Kelas X IPS</p>
                <p>0% complete</p>
                <button>Enroll</button>
            </div>
            <div class="course-card">
                <h3>Manajemen Sosial</h3>
                <p>Kelas X IPS</p>
                <p>0% complete</p>
                <button>Enroll</button>
            </div>
            <div class="course-card">
                <h3>Manajemen Sosial</h3>
                <p>Kelas X IPS</p>
                <p>0% complete</p>
                <button>Enroll</button>
            </div>
        </div>
    </div>

    <div class="courses-section">
        <h2>Recently Accessed Courses</h2>
        <div class="course-card-container">
            <div class="course-card">
                <h3>Pelatihan</h3>
                <p>Pelatihan ProTOEFL</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="column">
            <img src="logo.png" alt="Logo">
            <p>E-LEARNING Fakultas Teknik & Teknologi Informasi, Universitas Jenderal Achmad Yani, Yogyakarta. Learning Management System ini dikelola oleh Pengelola Laboratorium & TIK, Fakultas Teknik</p>
        </div>
        <div class="column">
            <h3>Pranala</h3>
            <p>SMA N Madesu</p>
            <p>IPA</p>
            <p>IPS</p>
            <p>Bahasa</p>
        </div>
        <div class="column">
            <h3>Ikuti Kami</h3>
            <p>Facebook</p>
            <p>Twitter</p>
        </div>
        <div class="column">
            <h3>SMA Negeri Madesu</h3>
            <p>Jl. Siliwangi km 0,7 Ringroad Barat, Banyuraden, Gamping, Daerah Istimewa Yogyakarta 55293</p>
            <p>Phone: (+62-254) 052-540</p>
            <p>Email: mds@madesu.ac.id</p>
        </div>
    </div>

    <footer>
        <p>Fakultas Teknik & Teknologi Informasi, Universitas Jenderal Achmad Yani Yogyakarta © 2018 - 2023.</p>
    </footer>
</body>
</html>
