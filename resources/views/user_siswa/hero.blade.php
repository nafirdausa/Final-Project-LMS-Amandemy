@extends('layouts.master')

@section('title', 'Home')

@section('content')
    {{-- <div class="bg-blue-500 text-white py-20 flex flex-col items-center justify-center">
        <h1 class="text-4xl font-bold mb-4">Hai, Pencari Ilmu Sejati!</h1>
        <h2 class="text-3xl font-bold mb-8">It's Time To Grow Up 🙌</h2>
        <p class="text-lg mb-8">Kami siap bantu kamu belajar secara efektif dan efisien dengan Mudah!</p>
        <button class="bg-white text-blue-500 font-bold py-2 px-4 rounded-full hover:bg-blue-600 hover:text-white">Mulai Belajar</button>
    </div> --}}
    <div class="welcome-section flex items-center justify-between bg-orange-500 p-8 rounded-lg mb-8 flex-wrap">
        <div>
            <h1 class="text-4xl font-bold mb-4">Hai, Pencari Ilmu Sejati!</h1>
            <h2 class="text-3xl font-bold mb-8">It's Time To Grow Up 🙌</h2>
            <p class="text-lg mb-8">Kami siap bantu kamu belajar secara efektif dan efisien dengan Mudah!</p>
            <button class="bg-blue-600 text-white font-bold py-2 px-4 rounded-full hover:bg-blue-600 hover:text-white">Mulai Belajar</button>
        </div>
        <div class="welcome-image">
            <p class="text-center">IMAGE</p>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-4">Our Only Concern is Your Education</h2>
            <p class="text-lg mb-8">We helps people build successful future and achieve the financial freedom to do what they want, whenever in the world they want</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-100 rounded-lg p-8">
                    <img src="image/education1.jpg" alt="Education Image" class="rounded-lg w-full mb-4">
                    <p class="text-lg mb-4">Our mission is to provide best, world-class education to anyone, anywhere. As an education student at LMS System you'll be able to take your classes through our customized learning platform.</p>
                </div>
                <div class="bg-gray-100 rounded-lg p-8">
                    <img src="image/education2.jpg" alt="Education Image" class="rounded-lg w-full mb-4">
                    <p class="text-lg mb-4">The world of open education has exploded since then, so today our curated lists of online courses are hand selected by our staff to show you the very best offerings by subject area.</p>
                </div>
            </div>

            <div class="mt-8">
                <p class="text-lg mb-4">Learn new skills and change your life for better. Get skills in Science, Social and Language.</p>
            </div>
        </div>
    </div>

    <div class="bg-gray-100 py-12">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold mb-4">Karya-Karya Siswa</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="image/portfolio1.jpg" alt="Portofolio Image" class="rounded-lg w-full mb-4">
                    <h3 class="text-xl font-bold mb-2">Portofolio Website</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Selengkapnya > Lihat Portofolio</a>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="image/portfolio2.jpg" alt="Portofolio Image" class="rounded-lg w-full mb-4">
                    <h3 class="text-xl font-bold mb-2">Portofolio Website</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Selengkapnya > Lihat Portofolio</a>
                </div>
                <div class="bg-white rounded-lg shadow-md p-6">
                    <img src="image/portfolio3.jpg" alt="Portofolio Image" class="rounded-lg w-full mb-4">
                    <h3 class="text-xl font-bold mb-2">Portofolio Website</h3>
                    <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="text-blue-500 hover:text-blue-700">Selengkapnya > Lihat Portofolio</a>
                </div>
            </div>
        </div>
    </div>
@endsection