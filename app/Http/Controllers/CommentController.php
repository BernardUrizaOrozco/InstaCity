<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function comment(Request $request)
    {
        $user_id = Auth::user()->id;

        $comment = new Comment;
        $comment->caption = $request->caption;
        $comment->post_id = $request->post_id;
        $comment->likes = 0;
        $comment->user_id = $user_id;
        $comment->save();

        return back();
    }

}
