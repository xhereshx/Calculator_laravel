<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgottenPasswordController extends Controller
{
    public function index(){
        return view('password.index');
    }
}
