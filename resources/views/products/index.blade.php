
@extends('layout', [
  'title' => 'Products'
])

@section('content')

<body class="main_layout">
<div class="flexboxproductpage">
    <div class="title"><h1>Calculator Hub</h1></div>
    <div class="flexboxproducts">
        <div class="itemproducts"><h2>Mortgage Calculator</h2>
        <p>Are you available for mortgage? How much you can borrow? Let's calculate it with our great calculator.</p>
        <button><a class="productsbutton" href="http://www.calculator.test/products/mortgage_calculator">Go to page</a></button></div>
        <div class="itemproducts"><h2>Tax Calculator</h2>
        <p>Quickly estimate your tax refund amount with our convenient tax return calculator. This interactive calculator provides accurate insight into how much you may get back this year or what you may owe before you file.</p>
        <button><a class="productsbutton"href="http://www.calculator.test/testmodel">Go to page</a></button></div>
    </div>
</div>
</body>
@endsection
