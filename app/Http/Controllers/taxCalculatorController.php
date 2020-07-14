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
    public function test1(){

        $form_db_fields = DB::select('SELECT * FROM `06_forms` LEFT JOIN `06_forms_detail` ON 06_forms.uid = 06_forms_detail.page_id ORDER BY 06_forms.sort ASC');
        //return DB::collection($form_db_fields);
        //return taxCalculator::collection($form_db_fields);
        return $form_db_fields;
    }
}
