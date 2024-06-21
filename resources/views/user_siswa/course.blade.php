@extends('layouts.master')
@section('title', 'My Course')

@section('content')
<section>
    <div class="container mx-auto mt-12">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">My Course</h2>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
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
        </div>
    </div>
</section>
@endsection
