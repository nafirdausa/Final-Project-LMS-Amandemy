@extends('layouts.master')
@section('title', 'E-Learning Dashboard')

@section('content')
<div class="container">
    <h2 class="text-center mt-5">Dashboard Guru</h2>
    <p>Selamat datang, {{ Auth::user()->username }}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
@endsection