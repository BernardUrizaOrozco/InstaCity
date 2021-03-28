<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', $user_id)->get()->toArray();
        return view('principal', compact('posts'));
    }
    
    public function show(User $user)
    {
        $posts = $user->posts->toArray();
        return view('principal', compact('posts'));
    }
}
