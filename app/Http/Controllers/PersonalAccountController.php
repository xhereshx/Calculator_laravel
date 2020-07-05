<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalAccountController extends Controller
{
    public function index(){
        return view('accounts.personal.index');
    }
}
