@extends('layouts.master')
@section('title', 'Welcome Page')

@section('content')

<div class="welcome-section flex items-center justify-evenly py-12 rounded-lg mb-8 flex-wrap">
    <div>
        <h1 class="text-6xl font-bold mb-5">Hai, Pencari Ilmu Sejati!</h1>
        <h2 class="text-6xl font-bold mb-8">Time To Grow Up 🙌</h2><br>
        <p class="text-xl mb-8">Kami siap membantu kamu dalam proses belajar <br> dengan menyediakan metode yang efektif dan efisien,<br> sehingga kamu dapat menguasai materi dengan lebih mudah dan cepat,<br> serta mencapai hasil yang optimal dalam waktu yang lebih singkat!</p>
        <a href="{{ route('login') }}">
            <button class="bg-blue-600 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-600 hover:text-white">Mulai Belajar</button>
        </a>
    </div>
    <div class="welcome-image">
        <img src="{{asset('assets/images/hero.jpg')}}" alt="gambar hero" width="550" height="550">
    </div>
    </div>
    <div class="py-12">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Perhatian Kami adalah Pendidikan Anda</h2>
            <p class="text-lg mb-8">Kami membantu orang membangun masa depan yang sukses dan mencapai kebebasan finansial <br> untuk melakukan apa yang mereka inginkan, dimanapun yang mereka inginkan</p>
        </div><br>

        <div class="max-w-6xl mx-auto grid grid-rows-3 grid-flow-col gap-8 justify-center">
            <div class="flex flex-col items-center md:flex-row md:col-span-1">
                <div class="w-full md:w-1.5/3">
                    <img src="{{ asset('assets/images/minat.jpg
                    ') }}" alt="Education Image 1" class="rounded-lg mb-4 md:mb-0 md:mr-4" >
                </div>
                <div class="w-full md:w-1.5/3">
                    <h3 class="text-xl font-bold mb-2">01 Tentukan Minatmu</h3>
                    <p class="text-gray-600 ml-7">Disini kami berkomitmen untuk memberikan pendidikan terbaik bagi kalian. Mulai perjalanan belajarmu dengan menentukan minatmu sejak awal, baik itu di bidang Bahasa, IPA, atau IPS. Melalui platform pembelajaran yang disesuaikan, kamu akan mendapatkan pengalaman belajar yang efektif dan efisien untuk mempersiapkan masa depan yang gemilang.</p>
                </div>
            </div>

            <div class="flex flex-col items-center justify-items-center justify-center md:flex-row md:col-span-1">
                <div class="w-full md:w-1.5/3">
                    <img src="{{ asset('assets/images/inovasi.jpg') }}" alt="Education Image 2" class="rounded-lg mb-4 md:mb-0 md:mr-4 md:ml-40">
                </div>
                <div class="w-full md:w-1.5/3">
                    <h3 class="text-xl font-bold mb-2">02 Berinovasi dan Menstimulasi Diskusi</h3>
                    <p class="text-gray-600 ml-7">Disini kamu didorong untuk berpikir kreatif dan kritis. Platform ini dirancang untuk memfasilitasi inovasi dan menstimulasi diskusi, memungkinkan kamu untuk berkolaborasi, bertukar ide, dan memecahkan masalah bersama.</p>
                </div>
            </div>

            <div class="flex flex-col items-center md:flex-row md:col-span-1">
                <div class="w-full md:w-1.5/3">
                    <img src="{{ asset('assets/images/feedback.jpg') }}" alt="Education Image 3" class="rounded-lg mb-4 md:mb-0 md:mr-4">
                </div>
                <div class="w-full md:w-1.5/3 justify-items-end">
                    <h3 class="text-xl font-bold mb-2">03 Minta Bantuan dan Umpan Balik</h3>
                    <p class="text-gray-600 ml-7">Kami memahami bahwa setiap siswa memiliki kebutuhan belajar yang unik. Disini, siswa dapat dengan mudah meminta bantuan dan mendapatkan umpan balik dari guru dan teman.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-4">Karya-Karya Siswa</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                @foreach ($portofolios as $portofolio)
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <img src="{{ asset($portofolio->gambar) }}" alt="Portofolio Image" class="rounded-lg w-full mb-4">
                        <h3 class="text-xl font-bold mb-2">{{ $portofolio->judul }}</h3>
                        <p class="text-gray-600 mb-4">{{ $portofolio->deskripsi }}</p>
                        <a href="{{ route('dashboard.siswa.portofolio') }}" class="text-blue-500 hover:text-blue-700">Selengkapnya > Lihat Portofolio</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
