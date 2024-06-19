@extends('layouts.test')
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-4 py-4">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <form action="{{ route('dashboard.guru.update_kelas', $class->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if (Session::get('error'))
                            <div class="row">
                                <div class="col-span-4 col-start-5 mt-2 py-2 rounded bg-red-600 text-white font-bold">
                                    {{ Session::get('error') }}
                                </div>
                            </div>
                        @endif
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">EDIT KELAS</h2>
                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="nama_mapel" class="block text-sm font-medium leading-6 text-gray-900">Mata Pelajaran</label>
                                        <div class="mt-2">
                                            <input type="text" name="nama_mapel" id="nama_mapel" autocomplete="given-name" class="block w-full rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('nama_mapel') border-red-500 @enderror" value="{{ old('nama_mapel', $class->nama_mapel) }}">
                                            @error('nama_mapel')
                                                <span class="text-red-500 text-sm" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="nama_kelas" class="block text-sm font-medium leading-6 text-gray-900">Kelas</label>
                                        <div class="mt-2">
                                            <input type="text" name="nama_kelas" id="nama_kelas" autocomplete="given-name" class="block w-full rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('nama_kelas') border-red-500 @enderror" value="{{ old('nama_kelas', $class->nama_kelas) }}">
                                            @error('nama_kelas')
                                                <span class="text-red-500 text-sm" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="tahun_ajaran" class="block text-sm font-medium leading-6 text-gray-900">Tahun Ajaran/Semester</label>
                                        <div class="mt-2">
                                            <input type="text" name="tahun_ajaran" id="tahun_ajaran" autocomplete="given-name" class="block w-full rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('tahun_ajaran') border-red-500 @enderror" value="{{ old('tahun_ajaran', $class->tahun_ajaran) }}">
                                            @error('tahun_ajaran')
                                                <span class="text-red-500 text-sm" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="nama_pengajar" class="block text-sm font-medium leading-6 text-gray-900">Nama Pengajar</label>
                                        <div class="mt-2">
                                            <input type="text" name="nama_pengajar" id="nama_pengajar" autocomplete="given-name" class="block w-full rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('nama_pengajar') border-red-500 @enderror" value="{{ old('nama_pengajar', $class->nama_pengajar) }}">
                                            @error('nama_pengajar')
                                                <span class="text-red-500 text-sm" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-x-25 tracking-tight-soft rounded-lg cursor-pointer">
                                Simpan Perubahan
                            </button>
                            <a href="{{ route('dashboard.guru.kelas') }}" class="inline-block px-6 py-3 ml-4 font-bold text-center text-white uppercase align-middle transition-all bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-x-25 tracking-tight-soft rounded-lg cursor-pointer">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
