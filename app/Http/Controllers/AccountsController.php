<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function index ()
    {
        return view('about_us.index');
    }
}