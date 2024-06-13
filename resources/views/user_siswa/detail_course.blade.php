@extends('layouts.master')
@section('title', 'Detail Course')

@section('content')
<section class="detail-course">
    <div class="container mx-auto p-5">
        <h2 class="my-4 text-2xl">My Course</h2>
        <div class="card border border-gray-300 rounded-lg">
            <div class="card-body p-4">
                <h4 class="text-xl mb-4">Manajemen Sosial (SC523) - IPS</h4>
                <div class="mb-3">
                    <strong>Informasi</strong>
                    <ul class="list-disc list-inside">
                        <li>Nama mata kuliah: Manajemen Sosial</li>
                        <li>Kelas: IPS, Semester Genap, Tahun Akademik 2023/2024</li>
                        <li>Dosen pengampu: Mei Mei, S.Pd., M.Sc.</li>
                        <li>Grup WhatsApp</li>
                        <li>Silakan bergabung dengan grup WhatsApp Mata Kuliah melalui tautan berikut: -</li>
                    </ul>
                </div>

                <div id="accordion">
                    <div class="card mb-2">
                        <div class="card-header p-4" id="headingOne" style="background-color: #f8f9fa">
                            <h5 class="mb-0">
                                <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    RPS Manajemen Sosial
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Konten RPS Manajemen Sosial
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-header p-4" id="headingTwo" style="background-color: #f8f9fa">
                            <h5 class="mb-0">
                                <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    Forum Diskusi
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <a href="quiz.html" class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;">Tugas Diskusi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mater-kelas mx-4">
                <div class="mt-3">
                    <strong>Materi 1</strong>
                    <div>
                        <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                            data-target="#collapseMaterial1" aria-expanded="false" aria-controls="collapseMaterial1">
                            Pendahuluan Dasar
                        </button>
                    </div>
                    <div id="collapseMaterial1" class="collapse">
                        <div class="card-body">
                            Konten Pendahuluan Dasar
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <strong>Materi 2</strong>
                    <div>
                        <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                            data-target="#collapseMaterial2" aria-expanded="false" aria-controls="collapseMaterial2">
                            Pemanasan Materi
                        </button>
                    </div>
                    <div id="collapseMaterial2" class="collapse">
                        <div class="card-body">
                            Konten Pemanasan Materi
                        </div>
                    </div>
                    <div class="mt-3">
                        <div>
                            <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                                data-target="#collapseTask" aria-expanded="false" aria-controls="collapseTask">
                                Tugas Diskusi
                            </button>
                        </div>
                        <div id="collapseTask" class="collapse">
                            <div class="card-body">
                                <div class="instruction p-3.5 rounded-md" style="background-color: #fcebd3">
                                    <p><strong>Opened:</strong> Thursday, 7 March 2024, 12:00 AM</p>
                                    <p><strong>Due:</strong> Monday, 11 March 2024, 12:00 AM</p>
                                    <p><strong>PETUNJUK PELAKSANAAN DISKUSI:</strong></p>
                                    <ol class="list-decimal list-inside">
                                        <li>Tentukan judul yang disepakati untuk diteliti</li>
                                        <li>Bagian pekerjaan untuk pembuatan:
                                            <ul class="list-disc list-inside ml-4">
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
                        <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                            data-target="#collapseMaterial3" aria-expanded="false" aria-controls="collapseMaterial3">
                            Materi 3
                        </button>
                    </div>
                    <div id="collapseMaterial3" class="collapse">
                        <div class="card-body">
                            Konten Materi 3
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <strong>Materi 4</strong>
                    <div>
                        <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                            data-target="#collapseMaterial4" aria-expanded="false" aria-controls="collapseMaterial4">
                            Materi 4
                        </button>
                    </div>
                    <div id="collapseMaterial4" class="collapse">
                        <div class="card-body">
                            Konten Materi 4
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <strong>Materi 5</strong>
                    <div>
                        <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                            data-target="#collapseMaterial5" aria-expanded="false" aria-controls="collapseMaterial5">
                            Materi 5
                        </button>
                    </div>
                    <div id="collapseMaterial5" class="collapse">
                        <div class="card-body">
                            Konten Materi 5
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <strong>Materi 6</strong>
                    <div>
                        <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                            data-target="#collapseMaterial6" aria-expanded="false" aria-controls="collapseMaterial6">
                            Materi 6
                        </button>
                    </div>
                    <div id="collapseMaterial6" class="collapse">
                        <div class="card-body">
                            Konten Materi 6
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <strong>Materi 7</strong>
                    <div>
                        <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                            data-target="#collapseMaterial7" aria-expanded="false" aria-controls="collapseMaterial7">
                            Materi 7
                        </button>
                    </div>
                    <div id="collapseMaterial7" class="collapse">
                        <div class="card-body">
                            Konten Materi 7
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <strong>Materi 8</strong>
                    <div>
                        <button class="btn-link font-bold cursor-pointer" style="color: inherit; text-decoration: none;" data-toggle="collapse"
                            data-target="#collapseMaterial8" aria-expanded="false" aria-controls="collapseMaterial8">
                            Materi 8
                        </button>
                    </div>
                    <div id="collapseMaterial8" class="collapse">
                        <div class="card-body">
                            Konten Materi 8
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('[data-toggle="collapse"]').forEach(button => {
        button.addEventListener('click', () => {
            const collapse = button.dataset.target;
            document.querySelector(collapse).classList.toggle('hidden');
        });
    });
</script>
@endsection
