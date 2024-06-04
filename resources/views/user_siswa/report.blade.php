@extends('layouts.master')
@section('title', 'My Course')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <img src="https://via.placeholder.com/150" alt="LMS Logo" class="img-fluid max-w-xs">
            <h3 class="mt-2">YAYASAN TADIKA MESRA</h3>
            <h4>SMA NEGERI MASA DEPAN SUMRINGAH (MADESU)</h4>
            <p>
                Kompleks Kemdikbud Gedung E Lantai 5 Jl. Jenderal Sudirman Senayan Jakarta, 10270<br>
                No Telp: 021-5725510 Fax: 021-5725510<br>
                Email: dapodik@kemdikbud.go.id | Instagram: dapodik_official
            </p>
        </div>
        <div class="card-body">
            <h4 class="text-center">HASIL STUDI</h4>
            <div class="mb-3">
                <div class="grid grid-cols-2">
                    <div>
                        <p><strong>Nama:</strong> Kim Jisoo</p>
                    </div>
                    <div class="text-right">
                        <p><strong>Th. Akademik:</strong> 2022/2023 Semester Genap</p>
                    </div>
                </div>
            </div>
            <table class="table-auto w-full border text-center">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="px-4 py-2">No</th>
                        <th class="px-4 py-2">Mata Pelajaran</th>
                        <th class="px-4 py-2">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">Bahasa Inggris</td>
                        <td class="border px-4 py-2">90</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">2</td>
                        <td class="border px-4 py-2">Manajemen Sosial</td>
                        <td class="border px-4 py-2">90</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">3</td>
                        <td class="border px-4 py-2">Sejarah Indonesia</td>
                        <td class="border px-4 py-2">90</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">4</td>
                        <td class="border px-4 py-2">Pendidikan Kewarganegaraan</td>
                        <td class="border px-4 py-2">90</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right mt-4">
                <p>Yogyakarta, 12-05-2022</p>
                <p><strong>Kepala Bagian Administrasi Akademik</strong></p>
            </div>
        </div>
    </div>
</div>
@endsection
