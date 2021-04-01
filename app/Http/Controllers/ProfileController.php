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
        $followings = User::inRandomOrder()->get();
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
        $user = User::where('id', '=', $user_id)->firstOrFail();
        return view('profile', compact('user'));
    }

    public function config()
    {
        return view('config');
    }
    public function change(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $profile = Auth::user()->profile;
        $profile->description = $request->description;
        $profile->image = $imageName;
        $profile->save();

        return back()
        ->with('success','You have successfully upload image.')
        ->with('image',$imageName)
        ->with('id',$profile->id); 
    }
    
}
