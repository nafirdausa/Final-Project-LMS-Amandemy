@extends('layouts.test')
<style>
    
</style>
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex align-items justify-center flex-wrap mx-4 py-4">
        <div class="flex-none max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-indigo-200 border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h2 class="flex align-items justify-center mb-4 text-base font-bold leading-7 text-gray-900" style="font-size: 20px;">TAMBAH RAPORT</h2>
                    <form action="" class="" method="">
                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Tahun Pelajaran</label>
                                    <div class="mt-2">
                                        <select id="country" name="country" autocomplete="country-name" class="block w-96 rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option selected>Silahkan Pilih Tahun</option>
                                            <option>2023/2024 Ganjil</option>
                                            <option>2023/2024 Genap</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="mt-4 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Kelas</label>
                                <div class="mt-2">
                                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option selected>Silahkan Pilih Kelas</option>
                                        <option>10 IPA</option>
                                        <option>10 IPS</option>
                                        <option>10 BAHASA</option>
                                        <option>11 IPA</option>
                                        <option>11 IPS</option>
                                        <option>11 BAHASA</option>
                                        <option>12 IPA</option>
                                        <option>12 IPS</option>
                                        <option>12 BAHASA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Nama Siswa</label>
                                <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option selected>Pilih Nama siswa</option>
                                    <option>Upin</option>
                                    <option>Ipin</option>
                                    <option>Mei mei</option>
                                    <option>ijat</option>
                                    <option>mail</option>
                                    <option>fizi</option>
                                    <option>ekhsan</option>
                                    <option>susanti</option>
                                </select>
                                </div>
                            </div>
                            <div class="mt-4 sm:col-span-3">
                                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Mata Pelajaran</label>
                                <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-lg border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option selected>Silahkan Pilih Matapelajaran</option>
                                    <option>Statistika</option>
                                    <option>Kimia Dasar</option>
                                    <option>Fisika Kuantum</option>
                                </select>
                                </div>
                            </div>                    
                          </div>
                        </div>
                        <div class="mt-3 flex items-center justify-center gap-x-6">
                            <button>
                                <div class="flex-none w-8/2 max-w-full px-3 text-right">
                                    <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;">&nbsp;&nbsp;Tambah Raport</a>
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