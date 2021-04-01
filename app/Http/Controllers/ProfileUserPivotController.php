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

    public function follow(Request $request)
    {
        $user_id = Auth::user()->id;

        $profile_id = $request->follow;

        DB::table('profile_user')->insert([
            'profile_id' => $profile_id,
            'user_id' => $user_id,
        ]);

        return back();
    }

    public function unfollow(Request $request)
    {
        $user_id = Auth::user()->id;

        $profile_id = $request->unfollow;
        
        $profileUserPivot = ProfileUserPivot::where('profile_id', $profile_id)->where('user_id', $user_id);

        $profileUserPivot->delete();

        return back();
    }
}
