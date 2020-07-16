<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MortgageCalculator;

class MortgageCalculatorController extends Controller
{
    public function index(){


        
        return view('products.mortgage_calculator.index');
    }
    public function store(Request $request){

        $y = 1000;
        $percentageofincome = intval($request->input('income'))/2;
        $yearlyInterestPayment = floatval($request->input('interest')); // medium yearly mortgage interest rates is 2,36% 
        $monthlyInterestPayment = intval(($yearlyInterestPayment)/12);
        $maxmortgagesavings = intval($request->input('savings')) * 10;
        /* $Mortgagemaxdebt = ($percentageofincome/(0.002 *(1+(1/((0.002  + 1) ** (floatval($request->input('loan'))*12)-1))))); */ 
        $Mortgagemaxdebt = ($percentageofincome/((floatval($request->input('interest'))/1200) *(1+(1/(((floatval($request->input('interest'))/1200)  + 1) ** (floatval($request->input('loan'))*12)-1))))); 
        //(floatval($request->input('interest'))/12)

        $MortgageCalculator = new MortgageCalculator;
        $MortgageCalculator->savings = floatval($request->input('savings')) * 10;
        $MortgageCalculator->income = $request->input('income');
        $MortgageCalculator->liabilities = $request->input('liabilities');
        $MortgageCalculator->loan = $request->input('loan');
        $MortgageCalculator->Max_mortgage = min($MortgageCalculator->savings, $Mortgagemaxdebt);
        
        $MortgageCalculator->Max_mortgage_savings = (floatval($request->input('interest'))*10); // Use it for interest input not ?
       
        $MortgageCalculator->Choosent_payment_time = $request->input('loan');
        $MortgageCalculator->Choosen_payment_amount = $MortgageCalculator->Max_mortgage/(($MortgageCalculator->loan)*12);
        
        /* $MortgageCalculator->age = (($MortgageCalculator->Max_mortgage)*(0.002*(1+(1/(((0.002 +1) ** (floatval($request->input('loan'))*12))-1))))); */

        $MortgageCalculator->age = (($MortgageCalculator->Max_mortgage)*((floatval($request->input('interest'))/1200)*(1+(1/((((floatval($request->input('interest'))/1200) +1) ** (floatval($request->input('loan'))*12))-1))))); 

        //$yearlyInterestPayment = $MortgageCalculator->Max_mortgage_savings; // medium yearly mortgage interest rates is 2,36% 

        /* $MortgageCalculator->Max_mortgage_savings  = ($monthlyInterestPayment*100); */
        $MortgageCalculator->Lowest_payment_time = ($MortgageCalculator->age/(intval($request->input('loan'))*12) );
        
        $MortgageCalculator->save();

        $a = intval($request->input('savings')) * 10;
    
        
        $xxx =  (intval($request->input('savings'))/2);
        $x = pow((0.00197 + 1),intval($request->input('loan')));
     
        return redirect('/products/mortgage_calculator/result/' . $MortgageCalculator->id);
       
    
        
    }

    public function show($MortgageCalculator_id){
      
       $MortgageCalculator = MortgageCalculator::findOrFail($MortgageCalculator_id);
        return view('products.mortgage_calculator.show', compact('MortgageCalculator'));
    }

    
}
