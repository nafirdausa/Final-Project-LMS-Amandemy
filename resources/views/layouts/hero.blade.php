@extends('layouts.master')
@section('title', 'Welcome Page')

@section('content')
<div class="hero container mx-auto">
    <div class="flex flex-col md:flex-row items-center" style="height:600px;">
        <div class="md:w-2/3 flex flex-col justify-center px-5">
            <h1 class="font-bold text-5xl">Hai Pencari Ilmu Sejati!<br>It's Time To Grow Up🙌</h1>
            <p class="font-semibold text-gray-500 mt-3 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur voluptatum libero sapiente tempora distinctio doloremque esse, corrupti sint asperiores pariatur eum fugiat vitae quod id autem ducimus consectetur quisquam veniam?</p>
            <a href="{{ route('user_siswa.home') }}" class="w-36 bg-blue-700 text-white text-md font-bold py-2 pl-6 rounded mt-4">
                Mulai Belajar
            </a>
        </div>
        <div class="md:w-1/3 flex justify-center">
            <img class="w-full h-auto rounded" src="/assets/images/home-greeting-image.png" alt="Hero image">
        </div>
    </div>
</div>
@endsection
