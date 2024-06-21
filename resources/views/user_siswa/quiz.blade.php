@extends('layouts.master')
@section('title', 'Task/Quiz')

@section('content')
<div class="container mx-auto my-5 px-4">
    @foreach ($kelas as $k)
        <div class="task-header bg-gray-100 rounded-md p-4">
            <h5>Task/Quiz</h5>
            <p>{{ $k->nama_kelas }} - {{ $k->nama_mapel }} > Tugas Diskusi</p>
        </div>
        <div class="submission-status mt-4 bg-gray-200 rounded-md p-4">
            <h6 class="font-bold">Submission Status</h6>
            <div><strong>Submission Status:</strong> Not submitted yet</div>
            <div><strong>Grading Status:</strong> Not graded</div>
            <div><strong>Last Modified:</strong> -</div>
            <div><strong>File Submission:</strong> No file submitted</div>
        </div>
        <div class="task-submit mt-4">
            @if ($tugas)
                <div class="mt-4 p-4 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold text-black">{{ $tugas->judul }}</h3>
                    <p class="mt-2 text-md text-gray-600">{{ $tugas->deskripsi }}</p>
                    <p class="mt-2 text-md text-gray-600">Deadline: {{ $tugas->deadline }} {{ $tugas->time }}</p>
                    <a href="{{ asset('storage/tugas/'.$tugas->file) }}" target="_blank" class="text-blue-600">{{ $tugas->file }}</a>
                </div>
                
                <form action="{{ route('submit_tugas_siswa', $tugas->id) }}" method="POST" enctype="multipart/form-data" class="mt-4 p-4 bg-gray-100 rounded-lg shadow-md">
                    @csrf
                    <div class="mb-4">
                        <label for="file" class="block mb-2">File Submission</label>
                        <input type="file" name="file" class="p-2 border border-gray-300 rounded-md" id="file" required>
                    </div>
                    <button type="submit" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-md">ADD SUBMISSION</button>
                </form>
            @endif
        </div>
    @endforeach
</div>
@endsection
