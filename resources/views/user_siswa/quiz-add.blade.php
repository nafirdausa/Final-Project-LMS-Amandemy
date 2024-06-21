@extends('layouts.master')
@section('title', 'Add Submission')

@section('content')
<div class="container mx-auto my-8">
    @foreach ($kelas as $k)
        <div class="task-header bg-gray-100 rounded-md p-4">
            <h5>Task/Quiz</h5>
            <p>{{ $k->nama_kelas }} - {{ $k->nama_mapel }} > Tugas Diskusi</p>
        </div>
         <div class="submission-status mt-8 bg-gray-100 p-4 rounded-lg">
            <h6 class="font-bold">Submission Status</h6>
            <div><strong>Submission Status:</strong> Submitted for grading</div>
            <div><strong>Grading Status:</strong> Not graded</div>
            <div><strong>Last Modified:</strong> Sunday, 10 March 2024, 11:07 PM</div>
        </div>

        <div class="task-submit mt-8">
            <a href="{{ route('dashboard.siswa.course') }}">
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded my-2">Back To Course</button>
            </a>
        </div>
    @endforeach
</div>
@endsection
