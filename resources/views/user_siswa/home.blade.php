@extends('layouts.master')
@section('title', 'LMS Dashboard')

@section('content')
    <section class="bg-orange-500 text-white rounded-lg mb-8 flex flex-wrap justify-between">
        <div class="flex flex-col justify-between p-8 max-w-base">
            <div>
                <p class="text-xl">Selamat Datang 👋</p>
                <h1 class="text-5xl font-bold">{{ Auth::user()->username }}</h1>
            </div>
            <div>
                <a href="{{ route('dashboard.siswa.course') }}" class="inline-block py-2 text-white hover:text-blue-700 rounded">Pergi ke course saya →</a>
            </div>
        </div>
        <div class="max-w-xs">
            <img src="/assets/images/home-greeting-image.png" alt="Welcome Illustration" class="mt-4 md:mt-0">
        </div>
    </section>

    <section class="mb-8">
        <h2 class="text-3xl font-bold mb-4">Courses</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($clases as $class)
                <div class="border border-gray-500 rounded-lg">
                    <a href="{{ route('dashboard.siswa.detail_course', ['id' => $class->id]) }}">
                        <div class="mb-4">
                            <img src="/assets/images/pattern-course.png" alt="" class="w-full">
                        </div>
                        <h5 class="text-lg px-4 text-gray-500">{{ $class->nama_mapel }}</h5>
                        <h5 class="text-lg px-4">{{ $class->nama_kelas }}</h5>
                        <h6 class="text-sm px-4 text-gray-400">{{ $class->tahun_ajaran }}</h6>
                        <h6 class="text-sm px-4 mb-4 text-gray-400">{{ $class->nama_pengajar }}</h6>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section>
        <h2 class="text-3xl font-bold mb-4">Recently Accessed Courses</h2>
        <div class="flex justify-center overflow-x-auto space-x-4 border border-gray-500 rounded-lg p-5">
            @if($lastAccessedCourse)
                <div class="border border-gray-500 rounded-lg">
                    <a href="{{ route('dashboard.siswa.detail_course', ['id' => $class->id]) }}">
                        <div class="mb-4">
                            <img src="/assets/images/pattern-course.png" alt="">
                        </div>
                        <h5 class="text-lg px-4 text-gray-500">{{ $lastAccessedCourse->nama_mapel }}</h5>
                        <h5 class="text-lg px-4">{{ $lastAccessedCourse->nama_kelas }}</h5>
                        <h6 class="text-sm px-4 text-gray-400">{{ $lastAccessedCourse->tahun_ajaran }}</h6>
                        <h6 class="text-sm px-4 mb-4 text-gray-400">{{ $lastAccessedCourse->nama_pengajar }}</h6>
                    </a>
                </div>
            @else
                <p>No recently accessed courses.</p>
            @endif
        </div>
    </section>
@endsection
