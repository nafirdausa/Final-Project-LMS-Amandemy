@extends('layouts.master')
@section('title', 'Detail Course')

@section('content')
<section class="detail-course">
            <div class="container content">
                <h2 class="my-4">My Course</h2>
                <div class="card">
                    <div class="card-body">
                        <h4>Manajemen Sosial (SC523) - IPS</h4>
                        <div class="mb-3">
                            <strong>Informasi</strong>
                            <ul>
                                <li>Nama mata kuliah: Manajemen Sosial</li>
                                <li>Kelas: IPS, Semester Genap, Tahun Akademik 2023/2024</li>
                                <li>Dosen pengampu: Mei Mei, S.Pd., M.Sc.</li>
                                <li>Grup WhatsApp</li>
                                <li>Silakan bergabung dengan grup WhatsApp Mata Kuliah melalui tautan berikut: -</li>
                            </ul>
                        </div>

                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link section-title" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            RPS Manajemen Sosial
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Konten RPS Manajemen Sosial
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link section-title" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Forum Diskusi
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        
                                        <a href="quiz.html" class="btn btn-link section-title"
                                            aria-expanded="false">Tugas Diskusi</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    

                    <div class="mater-kelas mx-4">
                        <div class="mt-3">
                            <strong>Materi 1</strong>
                            <div>
                                <button class="btn btn-link section-title" data-toggle="collapse"
                                    data-target="#collapseMaterial1" aria-expanded="false"
                                    aria-controls="collapseMaterial1">
                                    Pendahuluan Dasar
                                </button>
                            </div>
                            <div id="collapseMaterial1" class="collapse">
                                <div class="card card-body">
                                    Konten Pendahuluan Dasar
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <strong>Materi 2</strong>
                            <div>
                                <button class="btn btn-link section-title" data-toggle="collapse"
                                    data-target="#collapseMaterial2" aria-expanded="false"
                                    aria-controls="collapseMaterial2">
                                    Pemanasan Materi
                                </button>
                            </div>
                            <div id="collapseMaterial2" class="collapse">
                                <div class="card card-body">
                                    Konten Pemanasan Materi
                                </div>
                            </div>
                            <div class="mt-3">
                                <div>
                                    <button class="btn btn-link section-title" data-toggle="collapse"
                                        data-target="#collapseTask" aria-expanded="false" aria-controls="collapseTask">
                                        Tugas Diskusi
                                    </button>
                                </div>
                                <div id="collapseTask" class="collapse">
                                    <div class="card card-body">
                                        <div class="instruction">
                                            <p><strong>Opened:</strong> Thursday, 7 March 2024, 12:00 AM</p>
                                            <p><strong>Due:</strong> Monday, 11 March 2024, 12:00 AM</p>
                                            <p><strong>PETUNJUK PELAKSANAAN DISKUSI:</strong></p>
                                            <ol>
                                                <li>Tentukan judul yang disepakati untuk diteliti</li>
                                                <li>Bagian pekerjaan untuk pembuatan:
                                                    <ul>
                                                        <li>Latar belakang</li>
                                                        <li>Rumusan masalah</li>
                                                        <li>Tujuan penelitian dan pertanyaan penelitian</li>
                                                    </ul>
                                                </li>
                                                <li>Kumpulkan hasil diskusi ke e-learning</li>
                                                <li>Presentasikan hasil diskusi</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                        <div class="mt-3">
                            <strong>Materi 3</strong>
                            <div>
                                <button class="btn btn-link section-title" data-toggle="collapse"
                                    data-target="#collapseMaterial3" aria-expanded="false"
                                    aria-controls="collapseMaterial3">
                                    Materi 3
                                </button>
                            </div>
                            <div id="collapseMaterial3" class="collapse">
                                <div class="card card-body">
                                    Konten Materi 3
                                </div>
                            </div>
                        </div>
    
                        <div class="mt-3">
                            <strong>Materi 4</strong>
                            <div>
                                <button class="btn btn-link section-title" data-toggle="collapse"
                                    data-target="#collapseMaterial4" aria-expanded="false"
                                    aria-controls="collapseMaterial4">
                                    Materi 4
                                </button>
                            </div>
                            <div id="collapseMaterial4" class="collapse">
                                <div class="card card-body">
                                    Konten Materi 4
                                </div>
                            </div>
                        </div>
    
                        <div class="mt-3">
                            <strong>Materi 5</strong>
                            <div>
                                <button class="btn btn-link section-title" data-toggle="collapse"
                                    data-target="#collapseMaterial5" aria-expanded="false"
                                    aria-controls="collapseMaterial5">
                                    Materi 5
                                </button>
                            </div>
                            <div id="collapseMaterial5" class="collapse">
                                <div class="card card-body">
                                    Konten Materi 5
                                </div>
                            </div>
                        </div>
    
                        <div class="mt-3">
                            <strong>Materi 6</strong>
                            <div>
                                <button class="btn btn-link section-title" data-toggle="collapse"
                                    data-target="#collapseMaterial6" aria-expanded="false"
                                    aria-controls="collapseMaterial6">
                                    Materi 6
                                </button>
                            </div>
                            <div id="collapseMaterial6" class="collapse">
                                <div class="card card-body">
                                    Konten Materi 6
                                </div>
                            </div>
                        </div>
    
                    </div>
                    </div>
            </div>
            </div>
        </section>
@endsection