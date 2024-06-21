<!-- detail_course.blade.php -->
@extends('layouts.master')
@section('title', 'Detail Course')

@section('content')
<section class="detail-course">
    <div class="container mx-auto p-6">
        <h2 class="text-2xl mb-4">My Course</h2>
        <div class="bg-white rounded-lg shadow-md">
            @foreach ($kelas as $k)
                
            @endforeach
                <h4 class="text-xl mb-3">{{ $k->nama_kelas }} - {{ $k->nama_mapel }}</h4>
                <div class="mb-3">
                    <strong>Informasi</strong>
                    <ul class="list-disc pl-5">
                        <li>Nama mata kuliah: {{ $k->nama_mapel }}</li>
                        <li>Kelas: {{ $k->nama_kelas }}</li>
                        <li>Tahun Akademik: {{ $k->tahun_ajaran }}</li>
                        <li>Pengajar: {{ $k->nama_pengajar }}</li>
                    </ul>
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
                                <a href="{{ route('dashboard.siswa.forum') }}" class="font-bold">Ajukan pertanyaan Anda dalam forum</a>
                            </div>
                        </div>
                    </div>
                

            </div>

            <div class="mx-4">
                <div class="mb-3">
                    <strong>Materi</strong>
                    <ul class="list-disc pl-5">
                        @foreach($materi as $materiItem)
                            <div>
                                @foreach ($kelas as $k)
                                    <li>{{ $materiItem->judul }} - {{ $k->nama_mapel }}</li>
                                @endforeach
                                <p>{{ $materiItem->deskripsi }}</p>
                                <a href="{{ asset('storage/materi/'.$materiItem->file) }}" target="_blank" class="text-blue-600">{{ $materiItem->file }}</a>
                            </div>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-3">
                    <strong>Tugas</strong>
                    <ul class="list-disc pl-5">
                        @foreach($tugas as $tugasItem)
                            <a href="{{ route('dashboard.siswa.quiz', ['tugas_id' => $tugasItem->id]) }}">
                                <li>{{ $tugasItem->judul }} - Deadline: {{ $tugasItem->deadline }}</li>
                            </a>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-3">
                    <strong>Ujian</strong>
                    <ul class="list-disc pl-5">
                        @foreach($ujian as $ujianItem)
                            <a href="{{ route('dashboard.siswa.ujian', ['ujian_id' => $ujianItem->id]) }}">
                                <li>{{ $ujianItem->judul }} - Deadline: {{ $ujianItem->deadline }}</li>
                            </a>
                        @endforeach
                    </ul>
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
