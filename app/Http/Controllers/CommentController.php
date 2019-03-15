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
    protected $comment, $food;

    public function __construct(CommentRepository $comment, CommentRepository $food)
    {
        $this->comment = $comment;
        $this->food = $food;
    }

    public function getList($id)
    {   
        try
        {
            $food = $this->food->findFood($id);
            $comment = $this->comment->all();

            return view('admin.comment', compact('food', 'comment'));
        }
        catch (ModelNotFoundException $e) 
        {
            echo $e->getMessage();
        }    	
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

    public function getDelete($id)
    {
        try 
        {
            $comment = $this->comment->delete($id);

            return redirect('admin/comment/list/' . $id)->with('message', trans('setting.delete_success'));
        } 
        catch (ModelNotFoundException $e) 
        {
            echo $e->getMessage();
        }
    }
}

