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
        $followings = Auth::user()->following;
        $posts=[];
        foreach ($followings as $following) {
            foreach ($following->user->posts as $post) {
                $posts[] = $post;
            }
        }
        shuffle($posts);
        $followings = $followings->toArray();
        return view('home', compact('posts', 'followings'));
    }
    
    public function show($username)
    {
        $user = User::where('username', '=', $username)->firstOrFail();
        return view('profile', compact('user'));
    }

    public function me()
    {
        $user_id = Auth::user()->id;
        $posts = Post::where('user_id', $user_id)->get();
        $following = Auth::user()->following->toArray();
        $followers = Auth::user()->profile->followers->toArray();
        return view('profile', compact('posts', 'following', 'followers'));
    }
}
