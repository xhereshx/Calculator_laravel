@extends('layout', [
  'title' => 'Mortgage Calculator'
])
@section('content')    
<body class="main_layout">
    <div class="flexboxmortgagecalculator">
        <div class="title"><h1>Mortgage Calculator</h1></div>
        <form name="Calculator" method="POST" action="">
            @csrf
        <!-- method should be change to post-->
        <div class="flexboxmortgageform">
            <p>This calculator will show you if you are available for mortgage and how much you can take.</p>
            <p>Savings in Czk:</p>
            <input class="mortcalcinput" type="number" name="savings" required value="">
            <p>Net income in Czk:</p>
            <input class="mortcalcinput" type="number" name="income" required value="">
            <p>Interest:</p>
            <input type="number" name="interest" class="mortcalcinput" placeholder="2.36 - medium interest rate" required name="" step="0.01">
            <p>Age:</p> 
            <!-- <input class="mortcalcinput" type="text" required> -->
            <select class="mortcalcinput" name="age" value=""> 
                @for ($i= 18; $i < 51; $i++)
                    <option>{{$i}}</option>
                
                @endfor
                
                
            </select>
            <p>Liabilities pen month:</p>
            <input class="mortcalcinput" type="number" required name="liabilities" value="">
            <p>Loan term Years:</p>
           <!-- <input class="mortcalcinput" type="text" required> -->
           <select class="mortcalcinput" name="loan" value="">
            @for ($i= 5; $i < 36; $i++)
                    <option>{{$i}}</option>
                
                @endfor
           </select>
        </div>
        <br>
        <br>
        <div class="mortgagecalculatorbutton"><!-- <button><a class="productsbutton" href="http://www.calculator.test/products/mortgage_calculator/result">submit</a></button> -->
        <input type="submit" value="Submit"></div>
    </form>
    </div>
   
</body>
@endsection