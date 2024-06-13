@extends('layouts.master')
@section('title', 'Portofolio')

@section('content')
<div class="container mx-auto max-w-6xl">
    <h1 class="text-3xl font-bold mb-4">Potofolio</h1>
    <div class="project-form custom-background p-5 rounded-lg mb-10" style="background-color: #f9f9f9">
        <h2 class="text-2xl font-bold">Project Portofolio</h2>
        <p class="text-base font-normal mb-3">Kumpulkan projek-projek kamu sebagai portofolio</p>
        <div class="upload-area flex gap-5">
            <div class="image-upload custom-border w-48 h-48 flex flex-col items-center justify-center cursor-pointer text-center" style="border: 2px dashed #ccc">
                <label for="file-input" class="cursor-pointer">
                    Pilih Gambar<br>
                    <span>Klik untuk mengunggah gambar</span>
                </label>
                <input id="file-input" type="file" class="hidden">
            </div>
            <div class="project-details flex-grow flex flex-col gap-2">
                <input type="text" placeholder="Judul" class="p-2 border border-gray-300 rounded">
                <textarea placeholder="Deskripsi" class="p-2 border border-gray-300 rounded"></textarea>
                <input type="url" placeholder="Link Project" class="p-2 border border-gray-300 rounded">
                <button class="p-2 bg-blue-500 text-white rounded mt-2">Kirim Project</button>
            </div>
        </div>
    </div>

    <div class="project-list text-center">
        <h2 class="text-2xl font-bold">Project Portofolio yang Telah Dibuat</h2>
        <p class="text-base font-normal mb-3">Portofolio meningkatkan peluang untuk karir & project baru. Jangan sampai kalah saing.
        </p>
        <div class="project-cards flex gap-5 justify-center flex-wrap">
            <div class="card w-72 card-border rounded-lg overflow-hidden bg-white text-left" style="border: 1px solid #ccc">
                <img src="/assets/images/portofolio-img.png" alt="Project Image" class="w-full">
                <div class="flex flex-col justify-between">
                    <div class="p-2">
                        <h3 class="text-xl font-bold text-xl font-bold mb-2">Portofolio Website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...</p>
                    </div>
                    <div class="btn m-3">
                        <a href="#" class="block p-2 text-center bg-blue-500 text-white rounded-lg">Lihat Portofolio</a>
                    </div>
                </div>
            </div>
            <div class="card w-72 card-border-lg overflow-hidden bg-white text-left" style="border: 1px solid #ccc">
                <img src="/assets/images/portofolio-img.png" alt="Project Image" class="w-full">
                <div class="flex flex-col justify-between">
                    <div class="p-2">
                        <h3 class="text-xl font-bold mb-2">Portofolio Website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...</p>
                    </div>
                    <div class="btn m-3">
                        <a href="#" class="block p-2 text-center bg-blue-500 text-white rounded-lg">Lihat Portofolio</a>
                    </div>
                </div>
            </div>
            <div class="card w-72 card-border rounded-lg overflow-hidden bg-white text-left" style="border: 1px solid #ccc">
                <img src="/assets/images/portofolio-img.png" alt="Project Image" class="w-full">
                <div class="flex flex-col justify-between">
                    <div class="p-2">
                        <h3 class="text-xl font-bold mb-2">Portofolio Website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...</p>
                    </div>
                    <div class="btn m-3 rounded">
                        <a href="#" class="block p-2 text-center bg-blue-500 text-white rounded-lg">Lihat Portofolio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
