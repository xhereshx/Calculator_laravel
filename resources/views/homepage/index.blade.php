@extends('layout', [
  'title' => 'Homepage'
] )

@section('content')

<body class="main_layout">
  
  <main class="homepage_main">

  <div class="main_text">
  <h1 class="menu_title">Your Calculator Hub</h1>
  <p class="main_paragraph">Prepare your tax return with a simple online application, all by yourself.</p>
  <p class="main_paragraph">Find out how much your repayment costs with our mortgage repayment calculator.</p>
  </div>

  <div>
    <button class="home__button--calculate">
      <a class="home__link--calculate" href="{{ url('/products')}}">Checkout Our Calculators!</a>
    </button>
  </div>

  <p class="sub_paragraph">Enjoy using our range of calculators to aid you
    <br/> with your financial decisions.</p>

  </main>

</body>

@endsection
