@extends('layouts.master')
@section('title', 'E-Learning Dashboard')

@section('content')
<div class="container mx-auto">
    <h2 class="text-center mt-5 text-2xl font-bold">Dashboard Guru</h2>
    <p class="text-center">Selamat datang, {{ Auth::user()->username }}</p>
    <form method="POST" action="{{ route('logout') }}" class="text-center mt-4">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Logout</button>
    </form>
</div>
@endsection
