@extends('layouts.master')
@section('title', 'Task/Quiz')

@section('content')
<div class="container my-5">
            <div class="task-header">
                <h5>Task/Quiz</h5>
                <p>Manajemen Sosial (SC523) - IPS > Tugas Diskusi</p>
            </div>

            <div class="task-content mt-4">
                <h6 class="font-weight-bold">Tugas Diskusi</h6>
                <p><strong>Opened:</strong> Thursday, 7 March 2024, 12:00 AM<br>
                    <strong>Due:</strong> Monday, 11 March 2024, 12:00 AM
                </p>
                <div class="bg-light p-3 mb-3">
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

            <div class="submission-status mt-4">
                <h6 class="font-weight-bold">Submission Status</h6>
                <div><strong>Submission Status:</strong> Not submitted yet</div>
                <div><strong>Grading Status:</strong> Not graded</div>
                <div><strong>Last Modified:</strong> -</div>
                <div><strong>File Submission:</strong> No file submitted</div>
            </div>

            <div class="task-submit mt-4">
                
                <div class="form-group">
                    <label for="file">File Submission</label>
                    <input type="file" class="form-control-file" id="file">
                </div>
                <a href="quis-add.html" type="submit" class="btn btn-primary my-2">ADD SUBMISSION</a>
            </div>
        </div>
@endsection