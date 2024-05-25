@extends('layouts.master')
@section('title', 'Add Submission')

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
                <div><strong>Submission Status:</strong> Submitted for grading</div>
                <div><strong>Grading Status:</strong> Not graded</div>
                <div><strong>Last Modified:</strong> Sunday, 10 March 2024, 11:07 PM</div>
                <div><strong>File Submission:</strong> <a href="https://eprints.walisongo.ac.id/id/eprint/2367/3/73811032_bab2.pdf"><u> Tugas Hasil Diskusi.pdf </u></a>10 March 2024, 11:07 PM</div>
            </div>

            <div class="task-submit mt-4">
                
                
                <button type="submit" class="btn btn-primary my-2">Edit  SUBMISSION</button>
                <button type="submit" class="btn btn-primary my-2">Remove SUBMISSION</button>
            </div>
        </div>
@endsection