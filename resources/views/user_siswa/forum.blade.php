@extends('layouts.master')
@section('title', 'Forum Page')

@section('content')
<div class="container mt-5">
    <h1 class="text-2xl font-bold mb-4">Forum Diskusi</h1>
    <div class="forum-card p-3 mb-3">
        <h3 class="text-lg font-semibold mb-2">Manajemen Sosial (SC523) - IPS</h3>

        <div class="discussion p-2 my-2 bg-gray-100">
            <div class="flex">
                <div class="avatar bg-gray-500 rounded-full mr-2 w-10 h-10"></div>
                <div>
                    <p class="font-bold">Mail bin mail</p>
                    <p>Buka jasa joki ngerain tugas 5 ringgit 5 ringgit! Murah murah!</p>
                    <div class="replies pl-3">
                        <p><strong>Mei mei</strong> Saya mau saya mau, nak joki juga lah</p>
                        <p><strong>Fizi</strong> kenapa mei mei jadi macam ni?</p>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <input type="text" class="border border-gray-300 px-3 py-1 w-full" placeholder="balas komentar">
            </div>
        </div>

        <div class="discussion p-2 my-2 bg-gray-100">
            <div class="flex">
                <div class="avatar bg-gray-500 rounded-full mr-2 w-10 h-10"></div>
                <div>
                    <p class="font-bold">Ipin <span class="text-gray-500 text-sm">7 Mei 2024 • 01:27</span></p>
                    <p>Asal usul manusia darimana cikgu?</p>
                    <div class="replies pl-3">
                        <!-- Replies can be added here -->
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <input type="text" class="border border-gray-300 px-3 py-1 w-full" placeholder="balas komentar">
            </div>
        </div>

        <div class="discussion p-2 my-2 bg-gray-100">
            <div class="flex">
                <div class="avatar bg-gray-500 rounded-full mr-2 w-10 h-10"></div>
                <div>
                    <p class="font-bold">Susanti <span class="text-gray-500 text-sm">7 Mei 2024 • 01:27</span></p>
                    <p>p info?</p>
                    <img src="ini-gambar.jpg" alt="Gambar" class="img-thumbnail">
                </div>
            </div>
            <div class="mt-2">
                <input type="text" class="border border-gray-300 px-3 py-1 w-full" placeholder="balas komentar">
            </div>
        </div>
    </div>
</div>
@endsection
