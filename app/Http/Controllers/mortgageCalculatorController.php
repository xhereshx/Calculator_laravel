<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mortgageCalculatorController extends Controller
{
    public function index(){
        return view('products.mortgage_calculator.index');
    }
}
