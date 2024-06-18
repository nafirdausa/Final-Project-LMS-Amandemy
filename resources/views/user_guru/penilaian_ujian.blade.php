@extends('layouts.test')

@section('content')
    <div class="container">
        <h2>Penilaian Ujian</h2>
        <div>
            <h4>Judul Ujian: {{ $ujian->judul }}</h4>
            <p>Deskripsi: {{ $ujian->deskripsi }}</p>
            <p>Deadline: {{ $ujian->deadline }}</p>
        </div>
        <hr>
        <h3>Formulir Penilaian</h3>
        <form method="POST" action="{{ route('ujian.penilaian', ['ujian' => $ujian->id]) }}">
            @csrf
            <div class="form-group">
                <label for="nilai">Nilai:</label>
                <input type="number" class="form-control" id="nilai" name="nilai" min="0" max="100" required>
            </div>
            <div class="form-group">
                <label for="komentar">Komentar:</label>
                <textarea class="form-control" id="komentar" name="komentar" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
