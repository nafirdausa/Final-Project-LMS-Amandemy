@extends('layouts.master')
@section('title', 'My Course')

@section('content')
<div class="container mx-auto mt-5">
    <div class="card bg-white shadow-md rounded-lg overflow-hidden">
        <div class="card-header text-center bg-gray-100 p-4">
            <img src="https://via.placeholder.com/150" alt="LMS Logo" class="mx-auto mb-4" style="max-width: 100px;">
            <h3 class="mt-2 text-2xl font-semibold">YAYASAN TADIKA MESRA</h3>
            <h4 class="text-xl font-medium">SMA NEGERI MASA DEPAN SUMRINGAH (MADESU)</h4>
            <p class="text-gray-600 mt-2">
                Kompleks Kemdikbud Gedung E Lantai 5 Jl. Jenderal Sudirman Senayan Jakarta, 10270<br>
                No Telp: 021-5725510 Fax: 021-5725510<br>
                Email: dapodik@kemdikbud.go.id | Instagram: dapodik_official
            </p>
        </div>
        <div class="card-body p-6">
            <h4 class="text-center text-2xl font-bold mb-6">HASIL STUDI</h4>
            <div class="flex justify-between mb-6">
                <div class="text-left">
                    <p class="font-bold">Nama: <span class="font-normal">Kim Jisoo</span></p>
                </div>
                <div class="text-right">
                    <p class="font-bold">Th. Akademik: <span class="font-normal">2022/2023 Semester Genap</span>
                    </p>
                </div>
            </div>
            <table class="table-auto w-full text-center border-collapse border border-gray-300">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="border border-gray-300 p-2">No</th>
                        <th class="border border-gray-300 p-2">Mata Pelajaran</th>
                        <th class="border border-gray-300 p-2">Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 p-2">1</td>
                        <td class="border border-gray-300 p-2">Bahasa Inggris</td>
                        <td class="border border-gray-300 p-2">90</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2">2</td>
                        <td class="border border-gray-300 p-2">Manajemen Sosial</td>
                        <td class="border border-gray-300 p-2">90</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2">3</td>
                        <td class="border border-gray-300 p-2">Sejarah Indonesia</td>
                        <td class="border border-gray-300 p-2">90</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 p-2">4</td>
                        <td class="border border-gray-300 p-2">Pendidikan Kewarganegaraan</td>
                        <td class="border border-gray-300 p-2">90</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right mt-6">
                <p>Yogyakarta, 12-05-2022</p>
                <p class="font-bold">Kepala Bagian Administrasi Akademik</p>
            </div>
        </div>
    </div>
</div>
@endsection
