
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
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero perferendis nesciunt quam aspernatur dolore sapiente praesentium, unde est omnis voluptate nulla odit necessitatibus fugiat, laboriosam debitis iure! Similique, voluptatum expedita.</p>
        <button><a class="productsbutton"href="http://www.calculator.test/testmodel">Go to page</a></button></div>
    </div>
</div>
</body>
@endsection
