{{-- resources/views/user_guru/show_ujian.blade.php --}}
@extends('layouts.test')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex align-items justify-center flex-wrap mx-4 py-4">
        <div class="flex-none max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-indigo-200 border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h1 class="flex align-items justify-center text-base font-bold leading-7 text-black py-4" style="font-size: 25px;">DETAIL UJIAN</h1>
                    <div class="space-y-12">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="sm:col-span-3">
                                <label for="judul" class="block text-sm font-medium leading-6 text-black font-semibold">Judul Ujian</label>
                                <div class="mt-2">
                                    <p class="text-gray-700">{{ $ujian->judul }}</p>
                                </div>
                            </div>
                    
                            <div class="mt-4 sm:col-span-3">
                                <label for="deskripsi" class="block text-sm font-medium leading-6 text-black font-semibold">Deskripsi Ujian</label>
                                <div class="mt-2">
                                    <p class="text-gray-700">{{ $ujian->deskripsi }}</p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <label for="deadline" class="block text-sm font-medium leading-6 text-black font-semibold">Deadline Tanggal</label>
                                <div class="relative max-w-sm">
                                    <p class="text-gray-700">{{ $ujian->deadline }}</p>
                                </div>
                            </div>                   
                            <div class="mt-4">
                                <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu Deadline</label>
                                <div class="relative">
                                    <p class="text-gray-700">{{ $ujian->time }}</p>
                                </div>
                            </div>

                            <div class="mt-4 sm:col-span-3">
                                <label for="file" class="block text-sm font-medium leading-6 text-black font-semibold">File Ujian</label>
                                <div class="mt-2">
                                    @if($ujian->file)
                                    <a href="{{ asset('storage/ujian/' . $ujian->file) }}" target="_blank" class="text-blue-500">{{ $ujian->file }}</a>
                                    @else
                                    <p class="text-gray-700">Tidak ada file yang dilampirkan</p>
                                    @endif
                                </div>
                            </div>
                        
                            <div class="mt-4">
                                <label for="subject" class="block text-sm font-medium leading-6 text-black font-semibold">Mata Pelajaran</label>
                                @foreach ($kelas as $k)
                                    <div class="mt-2">
                                        <p class="text-gray-700">{{ $k->nama_mapel }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-center gap-x-6">
                        <a href="{{ route('dashboard.guru.ujian') }}" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">&nbsp;&nbsp;Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
