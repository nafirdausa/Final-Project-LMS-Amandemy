@extends('layouts.test')

@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <button>
        <div class="flex-none w-8/2 max-w-full px-3 text-right">
            <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="{{route('dashboard.guru.add_ujian')}}"> 
                <i class="fas fa-plus"> </i>&nbsp;&nbsp;Tambah Ujian
            </a>
        </div>
    </button>
    <div class="flex flex-wrap -mx-4 py-4">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Data Ujian</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama</th>
                                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Tanggal Ujian</th>
                                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Informasi Waktu</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">File</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Mapel</th>
                                    <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ujians as $ujian)
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <h6 class="px-4 py-1 mb-0 text-sm leading-normal">{{ $ujian->judul }}</h6>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $ujian->deskripsi }}</p>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $ujian->deadline }}</p>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <a href="{{ asset('storage/tugas/' . $ujian->file) }}" target="_blank"
                                            class="mb-0 text-xs font-semibold leading-tight text-blue-500">{{ $ujian->file }}</a>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $ujian->subject }}</p>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-xs font-semibold leading-tight">{{ $ujian->nilai }}</p>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <a href="{{ route('dashboard.guru.show_ujian', $ujian->id) }}"
                                            class="text-xs font-semibold leading-tight text-blue-500">Read</a> |
                                        <a href="{{ route('dashboard.guru.edit_ujian', $ujian->id) }}"
                                            class="text-xs font-semibold leading-tight text-blue-500">Edit</a> |
                                        <form action="{{ route('dashboard.guru.delete_ujian', $ujian->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-xs font-semibold leading-tight text-red-500">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
