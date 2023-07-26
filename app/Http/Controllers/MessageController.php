<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
class MessageController extends Controller
{
    public function getMessages()
    {
        $userId = Auth::user()->id; // Get the authenticated user's ID

        // Get the user's sent and received messages, sort by created_at in descending order, and limit to 10 records
        $messages = Message::where(function ($query) use ($userId) {
            $query->where('from_id', $userId)->orWhere('to_id', $userId);
        })
        ->with(['sender', 'recipient']) // Eager loading to fetch the related users
        ->orderBy('created_at', 'desc')
        ->take(10)
        ->get();

        return response()->json($messages);
    }
}
