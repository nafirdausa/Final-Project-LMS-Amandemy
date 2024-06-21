@extends('layouts.master')
@section('title', 'Ujian')

@section('content')
<div class="container mx-auto my-5 px-4">
    @foreach ($kelas as $k)
        <div class="task-header bg-gray-100 rounded-md p-4">
            <h5>Ujian</h5>
            <p>{{ $k->nama_kelas }} - {{ $k->nama_mapel }} > Ujian Diskusi</p>
        </div>
        <div class="submission-status mt-4 bg-gray-200 rounded-md p-4">
            <h6 class="font-bold">Submission Status</h6>
            <div><strong>Submission Status:</strong> Not submitted yet</div>
            <div><strong>Grading Status:</strong> Not graded</div>
            <div><strong>Last Modified:</strong> -</div>
            <div><strong>File Submission:</strong> No file submitted</div>
        </div>
        <div class="task-submit mt-4">
            @if ($ujian)
                <div class="mt-4 p-4 bg-gray-100 rounded-lg shadow-md">
                    <h3 class="text-2xl font-bold text-black">{{ $ujian->judul }}</h3>
                    <p class="mt-2 text-md text-gray-600">{{ $ujian->deskripsi }}</p>
                    <p class="mt-2 text-md text-gray-600">Deadline: {{ $ujian->deadline }} {{ $ujian->time }}</p>
                    <a href="{{ asset('storage/ujian/'.$ujian->file) }}" target="_blank" class="text-blue-600">{{ $ujian->file }}</a>
                </div>
                
                <form action="{{ route('submit_ujian_siswa', $ujian->id) }}" method="POST" enctype="multipart/form-data" class="mt-4 p-4 bg-gray-100 rounded-lg shadow-md">
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
