@extends('layouts.master')
@section('title', 'Forum Page')

@section('content')
<div class="container mt-5">
        <h1>Forum Diskusi</h1>
        <div class="forum-card p-3 mb-3">
            <h3>Manajemen Sosial (SC523) - IPS</h3>
            <div class="discussion p-2 my-2 bg-light">
                <div class="d-flex">
                    <div class="avatar bg-secondary rounded-circle mr-2"></div>
                    <div>
                        <p><strong>Mail bin mail</strong></p>
                        <p>Buka jasa joki ngerain tugas 5 ringgit 5 ringgit! Murah murah!</p>
                        <div class="replies pl-3">
                            <p><strong>Mei mei</strong> Saya mau saya mau, nak joki juga lah</p>
                            <p><strong>Fizi</strong> kenapa mei mei jadi macam ni?</p>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="text" class="form-control" placeholder="balas komentar">
                </div>
            </div>

            <div class="discussion p-2 my-2 bg-light">
                <div class="d-flex">
                    <div class="avatar bg-secondary rounded-circle mr-2"></div>
                    <div>
                        <p><strong>Ipin</strong> <span class="text-muted">7 Mei 2024 • 01:27</span></p>
                        <p>Asal usul manusia darimana cikgu?</p>
                        <div class="replies pl-3">
                            <!-- Replies can be added here -->
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="text" class="form-control" placeholder="balas komentar">
                </div>
            </div>

            <div class="discussion p-2 my-2 bg-light">
                <div class="d-flex">
                    <div class="avatar bg-secondary rounded-circle mr-2"></div>
                    <div>
                        <p><strong>Susanti</strong> <span class="text-muted">7 Mei 2024 • 01:27</span></p>
                        <p>p info?</p>
                        <img src="ini-gambar.jpg" alt="Gambar" class="img-thumbnail">
                    </div>
                </div>
                <div class="mt-2">
                    <input type="text" class="form-control" placeholder="balas komentar">
                </div>
            </div>
        </div>
    </div>
@endsection