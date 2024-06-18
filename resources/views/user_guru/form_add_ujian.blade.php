@extends('layouts.test')
<style>
    
</style>
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex align-items justify-center flex-wrap -mx-4 py-4">
        <div class="flex-none max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-indigo-200 border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h1 class="flex align-items justify-center text-base font-bold leading-7 text-black py-4" style="font-size: 25px;">TAMBAH UJIAN</h1>
                    <form action="" class="" method="">
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Judul Ujian</label>
                                    <div class="mt-2">
                                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-96 rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="mt-4 sm:col-span-3">
                                    <label for="about" class="block text-sm font-medium leading-6 text-black font-semibold">Deskripsi Tugas</label>
                                    <div class="mt-2">
                                      <textarea id="about" name="about" rows="3" class="block w-96 rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <label for="deadline-date" class="block text-sm font-medium leading-6 text-black font-semibold">Deadline Tanggal</label>
                                    <div class="relative max-w-sm">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                        <input datepicker datepicker-title="Date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                    </div>
                                </div>                   
                                <div class="mt-4">
                                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select time</label>
                                    <div class="relative">
                                        <input type="time" id="time" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                                    </div>
                                </div>    
                            
                                <div class="mt-4 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">File Ujian</label>
                                    <div class="mt-2">
                                        <input id="email" name="email" type="file" autocomplete="email" class="block w-96 bg-white rounded-lg border px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            
                                <div class="mt-4 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Mata Pelajaran</label>
                                    <div class="mt-2">
                                        <select id="country" name="country" autocomplete="country-name" class="block w-96 rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600  sm:leading-6">
                                            <option selected>Silahkan Pilih</option>
                                            <option>Statistika</option>
                                            <option>Kimia Dasar</option>
                                            <option>Fisika Kuantum</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="mt-4 sm:col-span-3">
                                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nilai</label>
                                        <div class="mt-2">
                                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-96 rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 flex items-center justify-center gap-x-6">
                            <button>
                                <div class="flex-none w-8/2 max-w-full px-3 text-right">
                                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;">&nbsp;&nbsp;Tambah Ujian</a>
                                </div>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection