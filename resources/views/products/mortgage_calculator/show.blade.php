@extends('layout', [
  'title' => 'Personal Account'
])
@section('content')    
<body class="main_layout">


<div class="flexboxproductpage">
<div class="title"><h1 class="test">Your mortgage can be:</h1>
<p>{{$MortgageCalculator->Max_mortgage}} CZK</p>
</div>
<div class="flexboxproducts">
    <div class="itemproducts"><h2>Maximaly monthly payment is:</h2>
    <p>{{($MortgageCalculator->income) /2}} CZK</p>
    <h2>How long will you pay</h2>
    <p>{{floor($MortgageCalculator->Lowest_payment_time/12)}} Years {{$MortgageCalculator->Lowest_payment_time%12}} Months
        </p>
    </div>
<div class="itemproducts"><h2>Monthly payment if you will pay {{$MortgageCalculator->loan}} years:</h2>
        <p>{{$MortgageCalculator->Choosen_payment_amount}} CZK</p>
        <h2>Your choosen years of payment:</h2>
        <p>{{$MortgageCalculator->loan}} Years</p>
            
   </div>
</div>
</div>
</body>
@endsection

