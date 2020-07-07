<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connectionTestController extends Controller
{
    public function index()
    {
        return view('connectiontest.test');
    }
}
