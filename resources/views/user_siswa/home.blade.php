@extends('layouts.master')
@section('title', 'E-Learning Dashboard')

@section('content')
    <div class="welcome-section">
        <div>
            <p>Selamat Datang 👋</p>
            <h1>{{ Auth::user()->username }}</h1>
            <a href="#">Pergi ke course saya →</a>
        </div>
        <div class="welcome-image">
            <p>IMAGE</p>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
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
@endsection