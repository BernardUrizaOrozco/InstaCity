<?php


namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', $user_id)->get()->toArray();
        return view('home', compact('posts'));
    }
    
    public function show($username)
    {
        $user = User::where('username', '=', $username)->firstOrFail();
        $posts = $user->posts->toArray();
        $following = Auth::user()->following->toArray();
        $followers = Auth::user()->profile->followers->toArray();
        return view('profile', compact('posts', 'following', 'followers'));
    }
    public function me()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', $user_id)->get()->toArray();
        $following = Auth::user()->following->toArray();
        $followers = Auth::user()->profile->followers->toArray();
        return view('profile', compact('posts', 'following', 'followers'));
    }
}