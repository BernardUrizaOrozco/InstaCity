<?php

namespace App\Http\Controllers;

use App\Models\ProfileUserPivot;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileUserPivotController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function follow(User $user)
    {
        $user_id = Auth::user()->id;

        DB::table('profile_user')->insert([
            'profile_id' => $user->profile->id,
            'user_id' => $user_id,
        ]);

        return view('profile', compact('user'));
    }

    public function unfollow(User $user)
    {
        $user_id = Auth::user()->id;
        
        $profileUserPivot = ProfileUserPivot::where('profile_id', $user->profile->id)->where('user_id', $user_id);

        $profileUserPivot->delete();

        return view('profile', compact('user'));
    }
}
