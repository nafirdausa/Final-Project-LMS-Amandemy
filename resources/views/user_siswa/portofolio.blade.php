@extends('layouts.master')
@section('title', 'Portofolio')

@section('content')
<div class="container">
    <div class="bg-gray-100 p-8 rounded-lg mb-8">
        <h2 class="text-xl font-bold">Project Portofolio</h2>
        <p>Kumpulkan projek-projek kamu sebagai portofolio</p>
        <div class="flex gap-4 mt-4">
            <div class="w-1/2">
                <label for="file-input" class="cursor-pointer block">
                    Pilih Gambar<br>
                    <span class="text-blue-500">Klik untuk mengunggah gambar</span>
                </label>
                <input id="file-input" type="file" class="hidden">
            </div>
            <div class="w-1/2">
                <input type="text" placeholder="Judul" class="border border-gray-300 rounded-md p-2 w-full">
                <textarea placeholder="Deskripsi" class="border border-gray-300 rounded-md p-2 w-full mt-2"></textarea>
                <input type="url" placeholder="Link Project" class="border border-gray-300 rounded-md p-2 w-full mt-2">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md mt-2">Kirim Project</button>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 p-8 rounded-lg">
        <h2 class="text-xl font-bold">Project Portofolio yang Telah Dibuat</h2>
        <p>Portofolio meningkatkan peluang untuk karir & project baru. Jangan sampai kalah saing.</p>
        <div class="flex justify-center gap-4 mt-4">
            <div class="card">
                <img src="{{ asset('assets/images/portofolio-img.png') }}" alt="Project Image" class="w-full">
                <h3 class="font-bold text-lg">Portofolio Website</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...</p>
                <a href="#" class="block bg-blue-500 text-white py-2 rounded-md text-center mt-2">Lihat Portofolio</a>
            </div>
            <!-- Repeat card elements as needed -->
        </div>
    </div>
</div>
@endsection
