@extends('layout', [
  'title' => 'Result'
])
@section('content')    
<body class="main_layout">


@section('content')
<body class='main_layout'>
<div class="flexboxproductpage">
<div class="title"><h1 class="test">Your mortgage can be:</h1>
<p>{{$MortgageCalculator->Max_mortgage}} CZK</p>
</div>
<div class="flexboxproducts">
    <div class="itemproducts"><h2>Maximaly monthly payment is:</h2>
    <p>{{($MortgageCalculator->income) /2}} CZK</p>
    <!-- <h2>How long will you pay:</h2>
     <p>{{ floor($MortgageCalculator->Lowest_payment_time/12)}} Years {{ $MortgageCalculator->Lowest_payment_time%12}} Months
        </p> -->
        <h2>How much will you pay pen month:</h2>
        <p>{{$MortgageCalculator->age}} CZK</p>
        
        
    </div>
<div class="itemproducts">
   <h2>You will repay:</h2>
        <p>{{(($MortgageCalculator->Choosent_payment_time)*12)*($MortgageCalculator->age)}} CZK</p>
        <h2>Interest which you will pay:</h2>
        <p>{{((($MortgageCalculator->Choosent_payment_time)*12)*($MortgageCalculator->age)) - $MortgageCalculator->Max_mortgage}} CZK</p>
        <p>{{$MortgageCalculator->Max_mortgage_savings}}</p>
        
            
   </div> 
</div>
</div>
</body>
@endsection

