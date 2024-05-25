@extends('layouts.master')
@section('title', 'My Course')

@section('content')
<div class="container mt-5">
            <div class="card">
                <div class="card-header text-center">
                    <img src="https://via.placeholder.com/150" alt="LMS Logo" class="img-fluid"
                        style="max-width: 100px;">
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
                    <div class="row mb-3">
                        <div class="col-6">
                            <p><strong>Nama:</strong> Kim Jisoo</p>
                        </div>
                        <div class="col-6 text-end">
                            <p><strong>Th. Akademik:</strong> 2022/2023 Semester Genap</p>
                        </div>
                    </div>
                    <table class="table table-bordered text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Mata Pelajaran</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bahasa Inggris</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Manajemen Sosial</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sejarah Indonesia</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pendidikan Kewarganegaraan</td>
                                <td>90</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-end mt-4">
                        <p>Yogyakarta, 12-05-2022</p>
                        <p><strong>Kepala Bagian Administrasi Akademik</strong></p>
                    </div>
                </div>
            </div>
        </div>
@endsection