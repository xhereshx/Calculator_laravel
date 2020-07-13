<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index ()
    {
      

        return view('accounts.index');
    }

     public function Store(Request $request){
        $User = new User;
        $User->name = $request->input('name');
        $User->surname = $request->input('surname');
        $User->username = $request->input('username');
        $User->email = $request->input('email');
        $User->password = $request->input('password');

        $User->save();
        return view('accounts.index', compact('User'));
        // 
    } 
}