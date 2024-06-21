@extends('layouts.test')
<style>
    
</style>
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex align-items justify-center flex-wrap mx-4 py-4">
        <div class="flex-none max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-indigo-200 border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h2 class="flex align-items justify-center mb-4 text-base font-bold leading-7 text-gray-900" style="font-size: 20px;">EDIT RAPORT</h2>
                    <form action="{{ route('dashboard.guru.update_raport', $raport->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="sm:col-span-3">
                                    <label for="tahun_ajaran" class="block text-sm font-medium leading-6 text-gray-900">Tahun Pelajaran</label>
                                    <div class="mt-2">
                                        <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" value="{{ $raport->nilai }}" min="0" max="100">
                                    </div>
                                </div>
                                <div class="mt-4 sm:col-span-3">
                                    <label for="kelas_id" class="block text-sm font-medium leading-6 text-gray-900">Kelas</label>
                                    <div class="mt-2">
                                        <select id="kelas_id" name="kelas_id" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="" selected>Silahkan Pilih Kelas</option>
                                            @foreach($kelas as $k)
                                                <option value="{{ $k->id }}" @if($raport->kelas_id == $k->id) selected @endif>{{ $k->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-4 sm:col-span-3">
                                    <label for="user_id" class="block text-sm font-medium leading-6 text-gray-900">Nama Siswa</label>
                                    <div class="mt-2">
                                        <select id="user_id" name="user_id" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="" selected>Pilih Nama siswa</option>
                                            @foreach($siswa as $s)
                                                <option value="{{ $s->id }}" @if($raport->user_id == $s->id) selected @endif>{{ $s->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-4 sm:col-span-3">
                                    <label for="mapel_id" class="block text-sm font-medium leading-6 text-gray-900">Mata Pelajaran</label>
                                    <div class="mt-2">
                                        <select id="mapel_id" name="mapel_id" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="" selected>Silahkan Pilih Matapelajaran</option>
                                            @foreach($mapels as $mapel)
                                                <option value="{{ $mapel->id }}" @if($raport->mapel_id == $mapel->id) selected @endif>{{ $mapel->nama_mapel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-4 sm:col-span-3">
                                    <label for="nilai" class="block text-sm font-medium leading-6 text-gray-900">Nilai</label>
                                    <div class="mt-2">
                                        <input type="number" name="nilai" id="nilai" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6" value="{{ $raport->nilai }}" min="0" max="100">
                                    </div>
                                </div>                    
                            </div>
                        </div>
                        <div class="mt-3 flex items-center justify-center gap-x-6">
                            <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">
                                &nbsp;&nbsp;Update Raport
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
