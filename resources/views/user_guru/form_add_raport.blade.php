@extends('layouts.test')
<style>
    
</style>
@section('content')
<div class="w-full px-6 py-6 mx-auto">
    <div class="flex flex-wrap -mx-4 py-4">
      <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-blue border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <form>
                <div class="space-y-12">
                  <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">TAMBAH RAPORT</h2>
                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">TAHUN PELAJARAN</label>
                        <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>2023/2024 Ganjil</option>
                            <option>2023/2024 Genap</option>
                        </select>
                        </div>
                    </div>
                    <div class="mt-4 sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">KELAS</label>
                        <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
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
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">NAMA SISWA</label>
                        <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
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
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">MATAPELAJARAN</label>
                        <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name" class="block w-full rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Statistika</option>
                            <option>Kimia Dasar</option>
                            <option>Fisika Kuantum</option>
                        </select>
                        </div>
                    </div>
                    <div class="mt-4 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">NILAI</label>
                        <div class="mt-2">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded border py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    
                  </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button>
                        <div class="flex-none w-8/2 max-w-full px-3 text-right">
                            <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;">&nbsp;&nbsp;Tambah Mapel</a>
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