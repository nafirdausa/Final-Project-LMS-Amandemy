@extends('layouts.test')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-4 py-4">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Detail Kelas</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-6">
                        <p><strong>Mata Pelajaran:</strong> {{ $class->nama_mapel }}</p>
                        <p><strong>Kelas:</strong> {{ $class->nama_kelas }}</p>
                        <p><strong>Tahun Ajaran:</strong> {{ $class->tahun_ajaran }}</p>
                        <p><strong>Nama Pengajar:</strong> {{ $class->nama_pengajar }}</p>
                        <a href="{{ route('dashboard.guru.kelas') }}" class="inline-block px-6 py-3 mt-4 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
