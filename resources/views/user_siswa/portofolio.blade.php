@extends('layouts.master')
@section('title', 'Portofolio')

@section('content')
<div class="container mx-auto max-w-6xl">
    @if (Session::get('error'))
        <div class="row">
            <div class="col-span-4 col-start-5 mt-2 py-2 rounded bg-red-600 text-white font-bold">
                {{ Session::get('error') }}
            </div>
        </div>
    @endif
    <h1 class="text-3xl font-bold mb-4">Portofolio</h1>
    <div class="project-form custom-background p-5 rounded-lg mb-10" style="background-color: #f9f9f9">
        <h2 class="text-2xl font-bold">Project Portofolio</h2>
        <p class="text-base font-normal mb-3">Kumpulkan projek-projek kamu sebagai portofolio</p>
        <form class="upload-area flex gap-5" action="{{ route('dashboard.siswa.uploadPortofolio') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="image-upload custom-border w-48 h-48 flex flex-col items-center justify-center cursor-pointer text-center" style="border: 2px dashed #ccc">
                <label for="file-input" class="cursor-pointer">
                    Pilih Gambar<br>
                    <span>Klik untuk mengunggah gambar</span>
                </label>
                <input id="file-input" type="file" class="hidden form-input @error('gambar') border-red-500 @enderror" name="gambar" value="{{ old('gambar') }}">
                @error('gambar')
                    <span class="text-red-500 text-sm" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="project-details flex-grow flex flex-col gap-2">
                <div class="mb-1">
                    <input type="text" placeholder="Judul" class="form-input w-full p-2 border border-gray-300 rounded @error('judul') border-red-500 @enderror" name="judul" value="{{ old('judul') }}">
                    @error('judul')
                        <span class="text-red-500 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
                </div>
                <div class="mb-1">
                    <textarea placeholder="Deskripsi" class="form-input w-full p-2 border border-gray-300 rounded  @error('deskripsi') border-red-500 @enderror" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>
                    @error('deskripsi')
                        <span class="text-red-500 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-1">
                    <input type="url" placeholder="Link Project" class="form-input w-full p-2 border border-gray-300 rounded @error('link_project') border-red-500 @enderror" name="link_project" value="{{ old('link_project') }}">
                    @error('link_project')
                        <span class="text-red-500 text-sm" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-1">
                    <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded mt-2">Kirim Project</button>
                </div>
            </div>
        </form>
    </div>

    <div class="project-list text-center">
        <h2 class="text-2xl font-bold">Project Portofolio yang Telah Dibuat</h2>
        <p class="text-base font-normal mb-3">Portofolio meningkatkan peluang untuk karir & project baru. Jangan sampai kalah saing.
        </p>
        <div class="project-cards flex gap-5 justify-center flex-wrap">
            @foreach ($portofolios as $portofolio)    
                <div class="card w-72 card-border rounded-lg overflow-hidden bg-white text-left border-solid border-2 border-indigo-600" >
                    <img src="{{ asset($portofolio->gambar) }}" alt="Project Image" class="w-full">
                    <div class="flex flex-col justify-between">
                        <div class="p-2">
                            <h3 class="text-xl font-bold text-xl font-bold mb-2">{{ $portofolio->judul }}</h3>
                            <p>{{ $portofolio->deskripsi }}</p>
                        </div>
                        <div class="btn m-3">
                            <a href="{{ $portofolio->link_project }}" target="_blank" class="block p-2 text-center bg-blue-500 text-white rounded-lg">Lihat Portofolio</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
