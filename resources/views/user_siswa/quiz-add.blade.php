@extends('layouts.master')
@section('title', 'Add Submission')

@section('content')
<div class="container mx-auto my-8">
    <div class="task-header bg-gray-100 p-4 rounded-lg">
        <h5 class="font-bold">Task/Quiz</h5>
        <p>Manajemen Sosial (SC523) - IPS &gt; Tugas Diskusi</p>
    </div>

    <div class="task-content mt-8 bg-white border border-gray-300 rounded-lg p-4">
        <h6 class="font-bold">Tugas Diskusi</h6>
        <p><strong>Opened:</strong> Thursday, 7 March 2024, 12:00 AM<br>
            <strong>Due:</strong> Monday, 11 March 2024, 12:00 AM
        </p>
        <div class="bg-gray-200 p-4 mb-4">
            <p><strong>PETUNJUK PELAKSANAAN DISKUSI</strong></p>
            <ol class="list-decimal list-inside">
                <li>Temukan judul yang dipersiapkan untuk diikuti.</li>
                <li>Bacalah pekerjaan untuk persiapan:
                    <ul class="list-disc list-inside">
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

    <div class="submission-status mt-8 bg-gray-100 p-4 rounded-lg">
        <h6 class="font-bold">Submission Status</h6>
        <div><strong>Submission Status:</strong> Submitted for grading</div>
        <div><strong>Grading Status:</strong> Not graded</div>
        <div><strong>Last Modified:</strong> Sunday, 10 March 2024, 11:07 PM</div>
        <div><strong>File Submission:</strong> <a
                href="https://eprints.walisongo.ac.id/id/eprint/2367/3/73811032_bab2.pdf"
                class="underline text-blue-600">Tugas Hasil Diskusi.pdf</a> 10 March 2024, 11:07 PM
        </div>
    </div>

    <div class="task-submit mt-8">
        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded my-2">Edit SUBMISSION</button>
        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded my-2">Remove SUBMISSION</button>
    </div>
</div>
@endsection
