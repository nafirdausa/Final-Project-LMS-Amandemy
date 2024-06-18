@extends('layouts.master')
@section('title', 'Detail Course')

@section('content')
<section class="detail-course">
    <div class="container mx-auto p-6">
        <h2 class="text-2xl mb-4">My Course</h2>
        <div class="bg-white rounded-lg shadow-md">
            <div class="p-4">
                <h4 class="text-xl mb-3">Manajemen Sosial (SC523) - IPS</h4>
                <div class="mb-3">
                    <strong>Informasi</strong>
                    <ul class="list-disc pl-5">
                        <li>Nama mata kuliah: Manajemen Sosial</li>
                        <li>Kelas: IPS, Semester Genap, Tahun Akademik 2023/2024</li>
                        <li>Dosen pengampu: Mei Mei, S.Pd., M.Sc.</li>
                        <li>Grup WhatsApp</li>
                        <li>Silakan bergabung dengan grup WhatsApp Mata Kuliah melalui tautan berikut: -</li>
                    </ul>
                </div>

                <div id="accordion">
                    <div class="bg-white rounded-lg shadow-md mb-2">
                        <div class="bg-gray-100 p-4" id="headingOne">
                            <h5 class="mb-0">
                                <button class="font-bold text-left w-full"
                                    style="display: flex; justify-content: space-between;" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    RPS Manajemen Sosial
                                    <span style="transition: transform 0.3s;">▼</span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="p-4">
                                Konten RPS Manajemen Sosial
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md mb-2">
                        <div class="bg-gray-100 p-4" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="font-bold text-left w-full"
                                    style="display: flex; justify-content: space-between;" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Forum Diskusi
                                    <span style="transition: transform 0.3s;">▼</span>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="p-4">
                                <a href="{{ route('dashboard.siswa.quiz') }}" class="font-bold">Tugas Diskusi</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mx-4">
                <div class="mt-3">
                    <strong>Materi 1</strong>
                    <div>
                        <button class="font-bold text-left w-full"
                            style="display: flex; justify-content: space-between;" data-toggle="collapse"
                            data-target="#collapseMaterial1" aria-expanded="false" aria-controls="collapseMaterial1">
                            Pendahuluan Dasar
                            <span style="transition: transform 0.3s;">▼</span>
                        </button>
                    </div>
                    <div id="collapseMaterial1" class="collapse">
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            Konten Pendahuluan Dasar
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <strong>Tugas</strong>
                    <ul class="list-disc pl-5">
                        @foreach($tugas as $tugas)
                            <li>{{ $tugas->judul }} - Deadline: {{ $tugas->deadline }}</li>
                            <!-- Tambahkan tombol untuk mengirimkan jawaban tugas -->
                            <a href="{{ route('submit_jawaban', ['tugas_id' => $tugas->id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Kirim Jawaban</a>
                        @endforeach
                    </ul>
                </div>
                <div class="mb-3">
                    <strong>Ujian</strong>
                    <ul class="list-disc pl-5">
                        @foreach($ujian as $ujian)
                            <li>{{ $ujian->judul }} - Deadline: {{ $ujian->deadline }}</li>
                            <!-- Tambahkan tombol untuk mengirimkan jawaban ujian -->
                            <a href="{{ route('submit_jawaban', ['ujian_id' => $ujian->id]) }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Kirim Jawaban</a>
                        @endforeach
                    </ul>
                </div>

                <div class="mt-3">
                    <strong>Materi 2</strong>
                    <div>
                        <button class="font-bold text-left w-full"
                            style="display: flex; justify-content: space-between;" data-toggle="collapse"
                            data-target="#collapseMaterial2" aria-expanded="false" aria-controls="collapseMaterial2">
                            Pemanasan Materi
                            <span style="transition: transform 0.3s;">▼</span>
                        </button>
                    </div>
                    <div id="collapseMaterial2" class="collapse">
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            Konten Pemanasan Materi
                        </div>
                    </div>
                    <div class="mt-3">
                        <div>
                            <button class="font-bold text-left w-full"
                                style="display: flex; justify-content: space-between;" data-toggle="collapse"
                                data-target="#collapseTask" aria-expanded="false" aria-controls="collapseTask">
                                Tugas Diskusi
                                <span style="transition: transform 0.3s;">▼</span>
                            </button>
                        </div>
                        <div id="collapseTask" class="collapse">
                            <div class="bg-white p-4 rounded-lg shadow-md">
                                <div class="bg-yellow-100 p-4 rounded-md">
                                    <p><strong>Opened:</strong> Thursday, 7 March 2024, 12:00 AM</p>
                                    <p><strong>Due:</strong> Monday, 11 March 2024, 12:00 AM</p>
                                    <p><strong>PETUNJUK PELAKSANAAN DISKUSI:</strong></p>
                                    <ol class="list-decimal pl-5">
                                        <li>Tentukan judul yang disepakati untuk diteliti</li>
                                        <li>Bagian pekerjaan untuk pembuatan:
                                            <ul class="list-disc pl-5">
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

            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('[data-toggle="collapse"]').forEach(function (element) {
        element.addEventListener('click', function () {
            var target = document.querySelector(element.getAttribute('data-target'));
            var isExpanded = element.getAttribute('aria-expanded') === 'true';
            element.setAttribute('aria-expanded', !isExpanded);
            target.classList.toggle('collapse');
            if (isExpanded) {
                element.querySelector('span').style.transform = 'rotate(0deg)';
            } else {
                element.querySelector('span').style.transform = 'rotate(180deg)';
            }
        });
    });
</script>
@endsection
