<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MortgageCalculatorResultController extends Controller
{
    public function index(){
        return view('products.mortgage_calculator.resultpage.index');
    }
}
