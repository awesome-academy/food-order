<?php

namespace App\Repositories;

use App\Comment;
use App\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentRepository
{
    public function commentFood(Request $request, $id)
    {
        $food = Food::findOrFail($id);
        $food->comments()->create([
            'user_id' => Auth::user()->id,
            'content' => $request->get('content'),
        ]);
    }
}

