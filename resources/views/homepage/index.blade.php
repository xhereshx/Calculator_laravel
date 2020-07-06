@extends('layout')

@section('content')

<body class="homepage">
  
  <main class="homepage_main">

  <div class="main_text">
  <h1 class="menu_title">Prepare Your Tax Return</h1>
  <p class="main_paragraph">Prepare your tax return with a simple online application, all by yourself.</p>
  <p class="main_paragraph">In just 15 minutes, step by step, even if you don't understand taxes.</p>
  </div>

  <div>
    <button class="home__button--calculate">
      <a class="home__link--calculate" href="{{ url('/products')}}">Let's Calculate Now</a>
    </button>
  </div>

  </main>

</body>

@endsection
