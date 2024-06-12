@extends('layouts.master')
@section('title', 'My Course')

@section('content')
<section>
    <div class="container mx-auto mt-12">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold">My Course</h2>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex flex-wrap mb-6 gap-4">
                <div class="w-20 mb-4">
                    <select class="bg-blue-500 text-white py-1 px-4 w-20 rounded">
                        <option>ALL</option>
                    </select>
                </div>
                <div class="w-48 mb-4">
                    <input type="text" class="form-input w-48 border border-gray-500 rounded p-1" placeholder="Search">
                </div>
                <div class="w-48">
                    <select class="form-select w-48 border border-gray-500 rounded p-1">
                        <option>Sort By Course Name</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/3 mb-4">
                    <a href="{{ route('dashboard.siswa.detail_course') }}">
                        <div class="bg-gray-100 p-4 rounded-lg text-center shadow-sm">
                            <div class="h-32 bg-gray-200 mb-4 flex justify-center items-center">
                                <img src="image/pattern-course.png" alt="" class="w-full h-full object-cover">
                            </div>
                            <h5 class="text-lg font-semibold mb-2">Manajemen Sosial Kelas X IPS</h5>
                            <div class="h-4 bg-gray-300 rounded">
                                <div class="bg-blue-500 h-full rounded" style="width: 14%;"></div>
                            </div>
                            <span class="text-sm text-gray-600">14% complete</span>
                        </div>
                    </a>
                </div>
                <!-- Repeat for other course cards -->
                <div class="w-full md:w-1/3 mb-4">
                    <a href="{{ route('dashboard.siswa.detail_course') }}">
                        <div class="bg-gray-100 p-4 rounded-lg text-center shadow-sm">
                            <div class="h-32 bg-gray-200 mb-4 flex justify-center items-center">
                                <img src="image/pattern-course.png" alt="" class="w-full h-full object-cover">
                            </div>
                            <h5 class="text-lg font-semibold mb-2">Manajemen Sosial Kelas X IPS</h5>
                            <div class="h-4 bg-gray-300 rounded">
                                <div class="bg-blue-500 h-full rounded" style="width: 14%;"></div>
                            </div>
                            <span class="text-sm text-gray-600">14% complete</span>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/3 mb-4">
                    <a href="{{ route('dashboard.siswa.detail_course') }}">
                        <div class="bg-gray-100 p-4 rounded-lg text-center shadow-sm">
                            <div class="h-32 bg-gray-200 mb-4 flex justify-center items-center">
                                <img src="image/pattern-course.png" alt="" class="w-full h-full object-cover">
                            </div>
                            <h5 class="text-lg font-semibold mb-2">Manajemen Sosial Kelas X IPS</h5>
                            <div class="h-4 bg-gray-300 rounded">
                                <div class="bg-blue-500 h-full rounded" style="width: 14%;"></div>
                            </div>
                            <span class="text-sm text-gray-600">14% complete</span>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/3 mb-4">
                    <a href="{{ route('dashboard.siswa.detail_course') }}">
                        <div class="bg-gray-100 p-4 rounded-lg text-center shadow-sm">
                            <div class="h-32 bg-gray-200 mb-4 flex justify-center items-center">
                                <img src="image/pattern-course.png" alt="" class="w-full h-full object-cover">
                            </div>
                            <h5 class="text-lg font-semibold mb-2">Manajemen Sosial Kelas X IPS</h5>
                            <div class="h-4 bg-gray-300 rounded">
                                <div class="bg-blue-500 h-full rounded" style="width: 14%;"></div>
                            </div>
                            <span class="text-sm text-gray-600">14% complete</span>
                        </div>
                    </a>
                </div>
                <div class="w-full md:w-1/3 mb-4">
                    <a href="{{ route('dashboard.siswa.detail_course') }}">
                        <div class="bg-gray-100 p-4 rounded-lg text-center shadow-sm">
                            <div class="h-32 bg-gray-200 mb-4 flex justify-center items-center">
                                <img src="image/pattern-course.png" alt="" class="w-full h-full object-cover">
                            </div>
                            <h5 class="text-lg font-semibold mb-2">Manajemen Sosial Kelas X IPS</h5>
                            <div class="h-4 bg-gray-300 rounded">
                                <div class="bg-blue-500 h-full rounded" style="width: 14%;"></div>
                            </div>
                            <span class="text-sm text-gray-600">14% complete</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
