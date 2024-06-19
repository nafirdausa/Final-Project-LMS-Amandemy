@extends('layouts.test')
<style>
    
</style>
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex align-items justify-center flex-wrap mx-4 py-4">
        <div class="flex-none max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-indigo-200 border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <form action="{{ route('submit_tugas') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1 class="flex align-items justify-center text-base font-bold leading-7 text-black py-4" style="font-size: 25px;">TAMBAH TUGAS</h1>
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="sm:col-span-3">
                                    <label for="judul" class="block text-sm font-medium leading-6 text-black font-semibold">Judul Tugas</label>
                                    <div class="mt-2">
                                        <input type="text" name="judul" id="judul" autocomplete="given-name" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                        
                                <div class="mt-4 sm:col-span-3">
                                    <label for="deskripsi" class="block text-sm font-medium leading-6 text-black font-semibold">Deskripsi Tugas</label>
                                    <div class="mt-2">
                                        <textarea id="deskripsi" name="deskripsi" rows="3" class="block w-96 rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <label for="deadline" class="block text-sm font-medium leading-6 text-black font-semibold">Deadline Tanggal</label>
                                    <div class="relative max-w-sm">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                        <input type="date" name="deadline" id="deadline" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                    </div>
                                </div>                   
                                <div class="mt-4">
                                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select time</label>
                                    <div class="relative">
                                        <input type="time" id="time" name="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="00:00" required />
                                    </div>
                                </div>

                                <div class="mt-4 sm:col-span-3">
                                    <label for="file" class="block text-sm font-medium leading-6 text-black font-semibold">File Tugas</label>
                                    <div class="mt-2">
                                        <input id="file" name="file" type="file" autocomplete="file" class="block w-full bg-white rounded-lg border px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            
                                <div class="mt-4">
                                    <label for="subject" class="block text-sm font-medium leading-6 text-black font-semibold">Mata Pelajaran</label>
                                    <div class="mt-2">
                                        <select id="subject" name="subject" autocomplete="subject-name" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:text-sm sm:leading-6">
                                            <option value="" disabled selected>Silahkan Pilih</option>
                                            <option value="Statistika">Statistika</option>
                                            <option value="Kimia Dasar">Kimia Dasar</option>
                                            <option value="Fisika Kuantum">Fisika Kuantum</option>
                                        </select>
                                    </div>
                                </div>
                            
                                <div class="mt-4">
                                    <label for="nilai" class="block text-sm font-medium leading-6 text-black font-semibold">Nilai</label>
                                    <div class="mt-2">
                                        <input type="number" name="nilai" id="nilai" autocomplete="given-name" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-center gap-x-6">
                            <button type="submit" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">&nbsp;&nbsp;Tambah Tugas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection