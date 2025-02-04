{{-- resources/views/user_guru/edit_tugas.blade.php --}}
@extends('layouts.test')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex align-items justify-center flex-wrap mx-4 py-4">
        <div class="flex-none max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-indigo-200 border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <form action="{{ route('dashboard.guru.update_materi', $materi->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h1 class="flex align-items justify-center text-base font-bold leading-7 text-black py-4" style="font-size: 25px;">EDIT MATERI</h1>
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="sm:col-span-3">
                                    <label for="judul" class="block text-sm font-medium leading-6 text-black font-semibold">Judul Materi</label>
                                    <div class="mt-2">
                                        <input type="text" name="judul" id="judul" value="{{ $materi->judul }}" autocomplete="given-name" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                        
                                <div class="mt-4 sm:col-span-3">
                                    <label for="deskripsi" class="block text-sm font-medium leading-6 text-black font-semibold">Deskripsi Materi</label>
                                    <div class="mt-2">
                                        <textarea id="deskripsi" name="deskripsi" rows="3" class="block w-96 rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $materi->deskripsi }}</textarea>
                                    </div>
                                </div>

                                <div class="mt-4 sm:col-span-3">
                                    <label for="file" class="block text-sm font-medium leading-6 text-black font-semibold">File Materi</label>
                                    <div class="mt-2">
                                        <input id="file" name="file" type="file" autocomplete="file" class="block w-full bg-white rounded-lg border px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <p class="text-sm text-gray-600 mt-2">File saat ini: <a href="{{ asset('storage/materi/' . $materi->file) }}" target="_blank" class="text-blue-500">{{ $materi->file }}</a></p>
                                    </div>
                                </div>
                            
                                <div class="mt-4">
                                    <label for="subject" class="block text-sm font-medium leading-6 text-black font-semibold">Mata Pelajaran</label>
                                    <div class="mt-2">
                                        <select id="subject" name="subject" autocomplete="subject-name" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6">
                                            <option value="" disabled selected>Silahkan Pilih</option>
                                            @foreach($kelas as $k)
                                                <option value="{{ $k->id }}">{{ $k->nama_mapel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-center gap-x-6">
                            <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">&nbsp;&nbsp;Update Tugas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
