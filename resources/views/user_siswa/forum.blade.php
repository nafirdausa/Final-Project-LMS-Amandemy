@extends('layouts.master')
@section('title', 'Forum Page')

@section('content')
<div class="container mt-5" x-data="{ openMenu: {} }">
    <h1 class="text-2xl font-bold mb-4">Forum Diskusi</h1>

    {{-- Form for creating a new discussion --}}
    <form action="{{ route('discussions.store') }}" method="POST" class="mb-4">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="border border-gray-300 px-3 py-2 w-full" placeholder="Judul Diskusi">
        </div>
        <div class="mb-3">
            <textarea name="body" class="border border-gray-300 px-3 py-2 w-full" placeholder="Isi Diskusi"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2">Buat Diskusi</button>
    </form>

    @foreach($discussions as $discussion)
    <div class="forum-card p-3 mb-3 bg-white shadow">
        <div class="flex justify-between items-center mb-2">
            <h3 class="text-lg font-semibold">{{ $discussion->title }}</h3>
            @if(Auth::id() == $discussion->user_id)
            <div class="relative inline-block text-left">
                <button type="button" class="text-gray-500 hover:text-gray-800 focus:outline-none"
                    @click="openMenu['discussion-{{ $discussion->id }}'] = !openMenu['discussion-{{ $discussion->id }}']">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div x-show="openMenu['discussion-{{ $discussion->id }}']" @click.away="openMenu['discussion-{{ $discussion->id }}'] = false"
                    class="absolute right-0 z-10 mt-2 w-48 bg-white rounded-md shadow-lg">
                    <form action="{{ route('discussions.destroy', $discussion->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hapus
                            Diskusi</button>
                    </form>
                </div>
            </div>
            @endif
        </div>
        <div class="discussion p-2 my-2 bg-gray-100">
            <div class="flex items-center mb-2">
                <div class="avatar bg-gray-500 rounded-full mr-2 w-10 h-10"></div>
                <div>
                    <p class="font-bold">{{ $discussion->user->name }}</p>
                </div>
            </div>
            <p class="mb-4">{{ $discussion->body }}</p>
            <div class="replies pl-3">
                @foreach($discussion->replies as $reply)
                <div class="flex justify-between items-center mb-2">
                    <div class="flex items-center">
                        <div class="avatar bg-gray-500 rounded-full mr-2 w-8 h-8"></div>
                        <div>
                            <p class="font-bold">{{ $reply->user->name }}</p>
                            <p>{{ $reply->body }}</p>
                        </div>
                    </div>
                    @if(Auth::id() == $reply->user_id)
                    <div class="relative inline-block text-left">
                        <button type="button" class="text-gray-500 hover:text-gray-800 focus:outline-none"
                            @click="openMenu['reply-{{ $reply->id }}'] = !openMenu['reply-{{ $reply->id }}']">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openMenu['reply-{{ $reply->id }}']" @click.away="openMenu['reply-{{ $reply->id }}'] = false"
                            class="absolute right-0 z-10 mt-2 w-48 bg-white rounded-md shadow-lg">
                            <form action="{{ route('replies.destroy', $reply->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hapus
                                    Balasan</button>
                            </form>
                        </div>
                    @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="mt-2">
            <form action="{{ route('replies.store', $discussion) }}" method="POST">
                @csrf
                <input type="text" name="body" class="border border-gray-300 px-3 py-1 w-full"
                    placeholder="Balas Komentar">
                <button type="submit" class="bg-blue-500 text-white px-4 py-1 mt-2">Balas Diskusi</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
