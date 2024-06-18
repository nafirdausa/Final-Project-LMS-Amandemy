@extends('layouts.master')
@section('title', 'Ujian')

@section('content')
<div class="container mx-auto my-5 px-4">
    <div class="task-header bg-gray-100 rounded-md p-4">
        <h5>Ujian</h5>
        <p>Manajemen Sosial (SC523) - IPS > Tugas Diskusi</p>
    </div>
    <div class="task-content mt-4 bg-white border rounded-md p-4">
        <h6 class="font-bold">Tugas Diskusi</h6>
        <p><strong>Opened:</strong> Thursday, 7 March 2024, 12:00 AM<br>
            <strong>Due:</strong> Monday, 11 March 2024, 12:00 AM
        </p>
        <div class="bg-gray-200 p-3 mb-3">
            <p><strong>PETUNJUK PELAKSANAAN DISKUSI</strong></p>
            <ol>
                <li>Temukan judul yang dipersiapkan untuk diikuti.</li>
                <li>Bacalah pekerjaan untuk persiapan:
                    <ul>
                        <li>1) latar belakang</li>
                        <li>2) rumusan masalah</li>
                        <li>3) tujuan penelitian dan pertanyaan penelitian</li>
                    </ul>
                </li>
                <li>Kumpulkan hasil diskusi ke e-learning.</li>
                <li>Presentasikan hasil diskusi.</li>
            </ol>
        </div>
    </div>
    <div class="submission-status mt-4 bg-gray-100 rounded-md p-4">
        <h6 class="font-bold">Submission Status</h6>
        <div><strong>Submission Status:</strong> Not submitted yet</div>
        <div><strong>Grading Status:</strong> Not graded</div>
        <div><strong>Last Modified:</strong> -</div>
        <div><strong>File Submission:</strong> No file submitted</div>
    </div>
    <div class="task-submit mt-4">
        @php
            $lastUjianId = null; // Variable untuk menyimpan id ujian terakhir
        @endphp

        @foreach($ujian as $ujianItem)
            @php
                $lastUjianId = $ujianItem->id; // Simpan id ujian terakhir yang diulang
            @endphp
        @endforeach

        @if (!is_null($lastUjianId))
            <form action="{{ route('submit_jawaban_ujian', ['ujian_id' => $lastUjianId]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="file" class="block mb-2">File Submission</label>
                    <input type="file" name="jawaban" class="p-2 border border-gray-300 rounded-md" id="file" required>
                </div>
                <!-- Mengubah button menjadi inline style -->
                <button type="submit" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md">ADD SUBMISSION</button>
            </form>
        @endif
    </div>
</div>
@endsection
