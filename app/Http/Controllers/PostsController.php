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

    public function create()
    {
        return view('create');
    }

    public function show(Post $post)
    {
        return view('post', compact('post'));
    }

    public function store(Request $request)
    {
        $user_id = Auth::user()->id;

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $post = new Post;
        $post->caption = $request->caption;
        $post->likes = 0;
        $post->user_id = $user_id;
        $post->image = $imageName;
        $post->save();

        return back()
        ->with('success','You have successfully upload image.')
        ->with('image',$imageName); 
    }
}
