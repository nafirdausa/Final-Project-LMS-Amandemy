<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Http\Request;

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

        return redirect()->route('discussions.index');
    }

    public function destroy(Discussion $discussion)
    {
        $discussion->delete();
        return redirect()->route('discussions.index');
    }
}
