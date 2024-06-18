<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;

class DiscussionController extends Controller
{
    public function index()
    {
        $discussions = Discussion::with('user', 'replies.user')->get();
        return view('user_siswa.forum', compact('discussions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $discussion = new Discussion();
        $discussion->title = $request->title;
        $discussion->body = $request->body;
        $discussion->user_id = auth()->id();
        $discussion->save();

        return redirect()->route('discussions.index')->with('success', 'Discussion created successfully!');
    }

    // Other resource methods can be implemented here if needed
}