<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taxCalculatorController extends Controller
{
    public function index(){
        return view('products.tax_calculator.index');
    }
}
