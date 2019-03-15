<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Food; 
use App\User;
use App\Repositories\CommentRepository;

class CommentController extends Controller
{   
    protected $food;

    public function __construct(CommentRepository $food)
    {
        $this->food = $food;
    }

    public function postComment(Request $request, $id)
    {   
        try
        {
            $food = $this->food->commentFood($request, $id);

            return redirect('food/' . $id)->with('message', trans('setting.comment_success'));
        }
        catch (ModelNotFoundException $e) 
        {
            echo $e->getMessage();
        }
    }
}

