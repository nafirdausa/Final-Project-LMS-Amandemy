{{-- resources/views/user_guru/read_raport.blade.php --}}
@extends('layouts.test')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex align-items justify-center flex-wrap mx-4 py-4">
        <div class="flex-none max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-indigo-200 border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h1 class="flex align-items justify-center text-base font-bold leading-7 text-black py-4" style="font-size: 25px;">DETAIL RAPORT</h1>
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="sm:col-span-3">
                                <label for="nama_siswa" class="block text-sm font-medium leading-6 text-black font-semibold">Nama Siswa</label>
                                <div class="mt-2">
                                    <p class="text-gray-700">{{ $raport->user->username }}</p>
                                </div>
                            </div>
                    
                            <div class="mt-4 sm:col-span-3">
                                <label for="kelas" class="block text-sm font-medium leading-6 text-black font-semibold">Kelas</label>
                                <div class="mt-2">
                                    <p class="text-gray-700">{{ $raport->kelas->nama_kelas }}</p>
                                </div>
                            </div>

                            <div class="mt-4 sm:col-span-3">
                                <label for="mata_pelajaran" class="block text-sm font-medium leading-6 text-black font-semibold">Mata Pelajaran</label>
                                <div class="mt-2">
                                    <p class="text-gray-700">{{ $raport->kelas->nama_mapel }}</p>
                                </div>
                            </div>

                            <div class="mt-4 sm:col-span-3">
                                <label for="nilai" class="block text-sm font-medium leading-6 text-black font-semibold">Nilai</label>
                                <div class="mt-2">
                                    <p class="text-gray-700">{{ $raport->nilai }}</p>
                                </div>
                            </div>

                            <div class="mt-4 sm:col-span-3">
                                <label for="tahun_ajaran" class="block text-sm font-medium leading-6 text-black font-semibold">Tahun Ajaran</label>
                                <div class="mt-2">
                                    <p class="text-gray-700">{{ $raport->tahun_ajaran }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-center gap-x-6">
                        <a href="{{ route('dashboard.guru.raport') }}" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">&nbsp;&nbsp;Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
