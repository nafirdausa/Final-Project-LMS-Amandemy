@extends('layouts.master')
@section('title', 'Portofolio')

@section('content')
<div class="container">
            <div class="project-form">
                <h2>Project Portofolio</h2>
                <p>Kumpulkan projek-projek kamu sebagai portofolio</p>
                <div class="upload-area">
                    <div class="image-upload">
                        <label for="file-input">
                            Pilih Gambar<br>
                            <span>Klik untuk mengunggah gambar</span>
                        </label>
                        <input id="file-input" type="file">
                    </div>
                    <div class="project-details">
                        <input type="text" placeholder="Judul">
                        <textarea placeholder="Deskripsi"></textarea>
                        <input type="url" placeholder="Link Project">
                        <button>Kirim Project</button>
                    </div>
                </div>
            </div>
    
            <div class="project-list">
                <h2>Project Portofolio yang Telah Dibuat</h2>
                <p>Portofolio meningkatkan peluang untuk karir & project baru. Jangan sampai kalah saing.</p>
                <div class="project-cards">
                    <div class="card">
                        <img src="image/portofolio-img.png" alt="Project Image">
                        <h3>Portofolio Website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...</p>
                        <a href="#">Lihat Portofolio</a>
                    </div>
                    <div class="card">
                        <img src="image/portofolio-img.png" alt="Project Image">
                        <h3>Portofolio Website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...</p>
                        <a href="#">Lihat Portofolio</a>
                    </div>
                    <div class="card">
                        <img src="image/portofolio-img.png" alt="Project Image">
                        <h3>Portofolio Website</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, ...</p>
                        <a href="#">Lihat Portofolio</a>
                    </div>
                </div>
            </div>
        </div>
@endsection