<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;//by Petr
use App\taxCalculator; //by Petr
use App\Http\Resources\taxCalculator as taxCalculatorResource; //by Petr
use Illuminate\Support\Facades\DB; //by Petr



class taxCalculatorController extends Controller
{
    public function index(){
        return view('products.tax_calculator.index');
    }
//added by Jan Polak
    public function test(){

        $form_configuration = include( resource_path('forms/tax_calculator.php'));

        return view('products.tax_calculator.test', compact('form_configuration'));
    }

    
}
