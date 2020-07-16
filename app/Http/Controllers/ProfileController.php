<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();
        $user_id = \Auth::id();
 
     
        
        return view('profiles.index', compact('profiles'));

    }
}
