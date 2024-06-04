@extends('layouts.master')
@section('title', 'LMS Dashboard')

@section('content')
    <div class="welcome-section flex items-center justify-between bg-orange-500 p-8 rounded-lg mb-8 flex-wrap">
        <div>
            <p class="text-lg">Selamat Datang 👋</p>
            <h1 class="text-2xl">{{ Auth::user()->username }}</h1>
            <a href="#" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded">Pergi ke course saya →</a>
        </div>
        <div class="welcome-image">
            <p class="text-center">IMAGE</p>
        </div>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="inline-block px-4 py-2 bg-red-600 text-white rounded">Logout</button>
        </form>
    </div>

    <div class="courses-section mb-8">
        <h2 class="text-xl mb-4">Courses</h2>
        <p class="mb-4">TA 2023/2024 Semester Genap</p>
        <div class="course-card-container flex gap-4 flex-wrap">
            <div class="course-card flex-1 p-4 bg-gray-100 rounded-lg text-center mb-4">
                <h3 class="mb-2">Manajemen Sosial</h3>
                <p>Kelas X IPS</p>
                <p>0% complete</p>
                <button class="mt-2 px-4 py-2 bg-blue-600 text-white rounded">Enroll</button>
            </div>
            <div class="course-card flex-1 p-4 bg-gray-100 rounded-lg text-center mb-4">
                <h3 class="mb-2">Manajemen Sosial</h3>
                <p>Kelas X IPS</p>
                <p>0% complete</p>
                <button class="mt-2 px-4 py-2 bg-blue-600 text-white rounded">Enroll</button>
            </div>
            <div class="course-card flex-1 p-4 bg-gray-100 rounded-lg text-center mb-4">
                <h3 class="mb-2">Manajemen Sosial</h3>
                <p>Kelas X IPS</p>
                <p>0% complete</p>
                <button class="mt-2 px-4 py-2 bg-blue-600 text-white rounded">Enroll</button>
            </div>
        </div>
    </div>

    <div class="courses-section mb-8">
        <h2 class="text-xl mb-4">Recently Accessed Courses</h2>
        <div class="course-card-container flex gap-4 flex-wrap">
            <div class="course-card flex-1 p-4 bg-gray-100 rounded-lg text-center mb-4">
                <h3 class="mb-2">Pelatihan</h3>
                <p>Pelatihan ProTOEFL</p>
            </div>
        </div>
    </div>
@endsection
