@extends('layouts.master')
@section('title', 'My Course')

@section('content')
<section class="py-5">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2 class="text-3xl font-bold">My Course</h2>
        </div>
        <div class="card p-3">
            <div class="flex mb-3">
                <div class="w-1/4">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full">ALL</button>
                </div>
                <div class="w-2/4">
                    <input type="text" class="form-input w-full" placeholder="Search">
                </div>
                <div class="w-1/4">
                    <select class="form-select w-full">
                        <option>Sort By Course Name</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 mb-4">
                    <a href="{{ route('dashboard.siswa.detail_course') }}">
                        <div class="bg-white rounded-lg shadow-md p-4">
                            <div class="h-40 bg-gray-300 mb-4 rounded"></div>
                            <h5 class="text-xl font-bold">Manajemen Sosial Kelas X IPS</h5>
                            <div class="w-full h-6 bg-gray-200 rounded-full mt-2">
                                <div class="w-1/7 bg-blue-500 h-full rounded-full"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Repeat this course card block for other courses -->
            </div>
        </div>
    </div>
</section>
@endsection
