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
        $monthlyInterestPayment = (($yearlyInterestPayment/100)/12);
        $maxmortgagesavings = intval($request->input('savings')) * 10;
        $Mortgagemaxdebt = ($percentageofincome/($monthlyInterestPayment *(1+(1/(($monthlyInterestPayment  + 1) ** (floatval($request->input('loan'))*12)-1)))));

        



        $MortgageCalculator = new MortgageCalculator;
        
        //$MortgageCalculator->savings = $request->input('savings');
        $MortgageCalculator->savings = intval($request->input('savings')) * 10;
        $MortgageCalculator->income = $request->input('income');
        $MortgageCalculator->age = $request->input('age');
        $MortgageCalculator->liabilities = $request->input('liabilities');
        
        $MortgageCalculator->loan = $request->input('loan');
        //$MortgageCalculator->Max_mortgage_savings = $request->input('loan');
        $MortgageCalculator->Max_mortgage = min($MortgageCalculator->savings, $Mortgagemaxdebt);
        $MortgageCalculator->Lowest_payment_time = ($MortgageCalculator->Max_mortgage / $percentageofincome);
        $MortgageCalculator->Max_mortgage_savings = $request->input('interest');// Use it for interest input not for max mortgage savings
        $MortgageCalculator->Choosent_payment_time = $request->input('loan');
        $MortgageCalculator->Choosen_payment_amount = $MortgageCalculator->Max_mortgage/(($MortgageCalculator->loan)*12);
        
        //$MortgageCalculator->liabilities = $maxmortgage;
        //$MortgageCalculator->age = 
        
        $yearlyInterestPayment = $MortgageCalculator->Max_mortgage_savings; // medium yearly mortgage interest rates is 2,36% 
        $monthlyInterestPayment = $yearlyInterestPayment/12;

       /*  if($MortgageCalculator->savings < $MortgageCalculator->age){
          return $MortgageCalculator->savings;
        }else{
            return $MortgageCalculator->age;
        } */

        
        
        
        
        //((intval($request->input('savings'))/2)/(0.00197/(1+(1/(((0.00197 + 1) ** (floatval($request->input('loan'))*12))-1)))));
        $MortgageCalculator->save();

        $a = intval($request->input('savings')) * 10;
        // $MortgageCalculator->savings = floatval($request->input('savings')) * 10;
        // floatval for float
        // intval for integer
        // $maxmortgage = intval($request->input('savings')) * 10 || <!-- maxpayment should replace floatval --> floatval($request->input('income') / 2);
       /* $maxpayment = ((floatval($request->input('income'))/2)/(0.00197 *(1 +( 1 / (((0.00197 + 1) * (intval($request->input('loan')) * intval($request->input('loan')))) -1))))); */
         //$yearlyInterestPayment = 2.36;
         //$monthlyInterestPayment = $yearlyInterestPayment/12;
        
        $xxx =  (intval($request->input('savings'))/2);
        $x = pow((0.00197 + 1),intval($request->input('loan')));
        //$id = $MortgageCalculator->id;
       //return $savings;
        //return redirect('/products/mortgage_calculator/result');
        return redirect('/products/mortgage_calculator/result/' . $MortgageCalculator->id);
        //return redirect('/products/mortgage_calculator/test/' . $MortgageCalculator->id);
    
        
    }

    public function show($MortgageCalculator_id){
       // $xxx = $savings; 
       $MortgageCalculator = MortgageCalculator::findOrFail($MortgageCalculator_id);
        return view('products.mortgage_calculator.show', compact('MortgageCalculator'));
    }

    
}
