<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Response;
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

        if (substr($request->caption, 0, 1) === '@'){
            $response = new Response;
            $response->caption = $request->caption;
            $response->comment_id = $request->comment_id;
            $response->likes = 0;
            $response->user_id = $user_id;
            $response->save();
        }
        else{
            $comment = new Comment;
            $comment->caption = $request->caption;
            $comment->post_id = $request->post_id;
            $comment->likes = 0;
            $comment->user_id = $user_id;
            $comment->save();
        }

        return back();
    }

}
