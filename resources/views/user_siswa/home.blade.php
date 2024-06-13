@extends('layouts.master')
@section('title', 'LMS Dashboard')

@section('content')
    <section class="bg-orange-500 text-white rounded-lg mb-8 flex flex-wrap justify-between">
        <div class="flex flex-col justify-between p-8 max-w-xs">
            <div>
                <p class="text-xl">Selamat Datang 👋</p>
                <h1 class="text-5xl font-bold">{{ Auth::user()->username }}</h1>
            </div>
            <div>
                <a href="#" class="inline-block py-2 text-white hover:text-blue-700 rounded">Pergi ke course saya →</a>
            </div>
        </div>
        <div class="max-w-xs">
            <img src="/assets/images/home-greeting-image.png" alt="Welcome Illustration" class="mt-4 md:mt-0">
        </div>
        <form method="POST" action="{{ route('logout') }}" class="mt-4">
            @csrf
            <button type="submit" class="inline-block px-4 py-2 bg-red-600 text-white rounded">Logout</button>
        </form>
    </section>

    <section class="mb-8">
        <h2 class="text-3xl font-bold mb-4">Courses</h2>
        <h3 class="text-2xl text-gray-700 mb-4">TA 2023/2024 Semester Genap</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="border border-gray-500 rounded-lg">
                    <a href="{{ route('dashboard.siswa.detail_course') }}">
                        <div class="mb-4">
                            <img src="/assets/images/pattern-course.png" alt="" class="w-full">
                        </div>
                        <h5 class="text-lg px-4 text-gray-500">Manajemen Sosial</h5>
                        <h5 class="text-lg px-4 mb-4">Kelas X IPS</h5>
                        <div class="relative pt-1 px-4">
                            <div class="overflow-hidden p-2 h-2 mb-4 text-xs flex rounded-lg bg-blue-500">
                                <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500" style="width: 14%;">100% complete</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="border border-gray-500 rounded-lg">
                    <a href="{{ route('dashboard.siswa.detail_course') }}">
                        <div class="mb-4">
                            <img src="/assets/images/pattern-course.png" alt="" class="w-full">
                        </div>
                        <h5 class="text-lg px-4 text-gray-500">Manajemen Sosial</h5>
                        <h5 class="text-lg px-4 mb-4">Kelas X IPS</h5>
                        <div class="relative pt-1 px-4">
                            <div class="overflow-hidden p-2 h-2 mb-4 text-xs flex rounded-lg bg-blue-500">
                                <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500" style="width: 14%;">100% complete</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="border border-gray-500 rounded-lg">
                    <a href="{{ route('dashboard.siswa.detail_course') }}">
                        <div class="mb-4">
                            <img src="/assets/images/pattern-course.png" alt="" class="w-full">
                        </div>
                        <h5 class="text-lg px-4 text-gray-500">Manajemen Sosial</h5>
                        <h5 class="text-lg px-4 mb-4">Kelas X IPS</h5>
                        <div class="relative pt-1 px-4">
                            <div class="overflow-hidden p-2 h-2 mb-4 text-xs flex rounded-lg bg-blue-500">
                                <div class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500" style="width: 14%;">100% complete</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Repeat for other course cards -->
            </div>
        </section>
        <section>
            <h2 class="text-3xl font-bold mb-4">Recently Accessed Courses</h2>
            <div class="flex justify-center overflow-x-auto space-x-4 border border-gray-500 rounded-lg p-5">
                <div class="grid grid-cols-1 md:grid-cols-1 border border-gray-500 rounded-lg">
                    <div class="mb-4">
                        <img src="/assets/images/pattern-course.png" alt="">
                    </div>
                    <h5 class="text-lg px-4 text-gray-500">Pelatihan</h5>
                    <h5 class="text-lg px-4 mb-4">Pelatihan ProTOEFL</h5>
                </div>
            </div>
        </section>
@endsection
