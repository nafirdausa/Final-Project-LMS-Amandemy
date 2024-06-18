@extends('layouts.master')
@section('title', 'Forum Page')

@section('content')
<div class="container mt-5">
    <h1 class="text-2xl font-bold mb-4">Forum Diskusi</h1>

    <!-- Form untuk membuat diskusi baru -->
    <form action="{{ route('discussions.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Judul Diskusi" required>
        </div>
        <div class="mb-3">
            <textarea name="body" class="form-control" rows="3" placeholder="Isi Diskusi" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Buat Diskusi</button>
    </form>

    @if ($discussions->isEmpty())
    <p>Tidak ada diskusi yang tersedia.</p>
    @else
    @foreach($discussions as $discussion)
    <div class="forum-card p-3 mb-3">
        <h3 class="text-lg font-semibold mb-2">{{ $discussion->title }}</h3>
        <div class="discussion p-2 my-2 bg-gray-100">
            <div class="flex">
                <div class="avatar bg-gray-500 rounded-full mr-2 w-10 h-10"></div>
                <div>
                    <p class="font-bold">{{ $discussion->user->name }}</p>
                    <p>{{ $discussion->body }}</p>
                    <div class="replies pl-3">
                        @foreach($discussion->replies as $reply)
                        <p><strong>{{ $reply->user->name }}</strong> {{ $reply->body }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Form untuk menambah balasan -->
            <div class="mt-2">
                <form action="{{ route('replies.store', $discussion) }}" method="POST">
                    @csrf
                    <input type="text" name="body" class="border border-gray-300 px-3 py-1 w-full"
                        placeholder="Balas Komentar" required>
                    <button type="submit" class="btn btn-secondary mt-2">Balas</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>
@endsection
