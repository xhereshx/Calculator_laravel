<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taxCalculatorController extends Controller
{
    public function index(){
        return view('products.tax_calculator.index');
    }

    public function test(){

        $form_configuration = include( resource_path('forms/tax_calculator.php'));

        return view('products.tax_calculator.test', compact('form_configuration'));
    }

    
}
