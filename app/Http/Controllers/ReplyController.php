<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discussion;
use App\Models\Reply;

class ReplyController extends Controller
{
    public function store(Request $request, Discussion $discussion)
    {
        $request->validate([
            'body' => 'required|string',
        ]);

        $reply = new Reply();
        $reply->discussion_id = $discussion->id;
        $reply->user_id = auth()->id();
        $reply->body = $request->body;
        $reply->save();

        return redirect()->route('discussions.index')->with('success', 'Reply added successfully!');
    }

    public function destroy(Reply $reply)
    {
        $reply->delete();
        return redirect()->route('discussions.index')->with('success', 'Reply deleted successfully!');
    }
}