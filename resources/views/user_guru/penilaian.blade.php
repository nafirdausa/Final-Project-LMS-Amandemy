@extends('layouts.test')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex align-items justify-center flex-wrap mx-4 py-4">
        <div class="flex-none max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-indigo-200 border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h1 class="flex align-items justify-center text-base font-bold leading-7 text-black py-4" style="font-size: 25px;">Tugas Siswa</h1>
                    <div class="space-y-12">
                        @foreach($tugas as $t)
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-lg font-medium leading-6 text-black">{{ $t->judul }}</h2>
                                <div class="mt-4 p-4 bg-white rounded-lg shadow-md">
                                    <h3 class="text-md font-semibold text-black">Tugas yang Dikumpulkan</h3>
                                    @foreach($t->tugasSiswa as $ts)
                                        <div class="mt-4 p-4 bg-gray-100 rounded-lg shadow-inner">
                                            <p class="text-sm text-gray-600">Siswa: {{ $ts->siswa->username }}</p>
                                            <a href="{{ asset('storage/tugas_siswa_files/' . $ts->file) }}" target="_blank" class="mb-0 text-xs font-semibold leading-tight text-blue-500">{{ $ts->file }}</a>
                                            <form action="{{ route('nilai_tugas_siswa', $ts->id) }}" method="POST" class="mt-4">
                                                @csrf
                                                <div class="mt-2">
                                                    <label for="nilai" class="block text-sm font-medium leading-6 text-black font-semibold">Nilai</label>
                                                    <input id="nilai" name="nilai" type="number" min="0" max="100" class="block w-full mt-2 bg-white rounded-lg border px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                </div>
                                                <div class="mt-2">
                                                    <label for="komentar" class="block text-sm font-medium leading-6 text-black font-semibold">Komentar</label>
                                                    <textarea id="komentar" name="komentar" rows="3" class="block w-full mt-2 bg-white rounded-lg border px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                                </div>
                                                <button type="submit" class="mt-2 inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">Submit</button>
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
