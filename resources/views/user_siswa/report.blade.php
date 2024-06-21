@extends('layouts.master')
@section('title', 'My Course')

@section('content')
<div class="container mx-auto mt-5">
    <div class="card bg-white shadow-md rounded-lg overflow-hidden">
        <div class="card-body p-6">
            <h4 class="text-center text-2xl font-bold mb-6">HASIL STUDI</h4>
            <div class="flex justify-between mb-6">
                @foreach($raports as $raport)
                    <div class="text-left">
                        <p class="font-bold">Nama: <span class="font-normal">{{$raport->user->name}}</span></p>
                    </div>
                    <div class="text-right">
                        <p class="font-bold">Th. Akademik: <span class="font-normal">{{$raport->tahun_ajaran}}</span>
                        </p>
                    </div>
                @endforeach
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
                    @foreach($raports as $raport)
                        <tr>
                            <td class="border border-gray-300 p-2">{{$raport->id}}</td>
                            <td class="border border-gray-300 p-2">{{$raport->kelas->nama_mapel}}</td>
                            <td class="border border-gray-300 p-2">{{$raport->nilai}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-right mt-6">
                <p class="font-bold">Kepala Bagian Administrasi Akademik</p>
            </div>
        </div>
    </div>
</div>
@endsection
