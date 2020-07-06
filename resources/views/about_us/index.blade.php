@extends('layout', [
  'title' => 'About Us'
])

@section('content')

  <body class="main_layout">

    <section class="flexbox">
    <div class="item">
    <p><img class="founders" src="https://media-exp1.licdn.com/dms/image/C5103AQHpAyc_7nV9jg/profile-displayphoto-shrink_800_800/0?e=1599091200&v=beta&t=aeQRX9jxaKmumzcgICumAGydpRky5u0pzH37h7W0siQ" alt="Hazmin Firdaus Chik"></p>
    <h1 class="textColor">Hazmin Firdaus Chik</h1>
    <p class="text textColor">I decided to join this bootcamp to challenge myself and change my career. It's an amazing experience to learn from the experts at the bootcamp.</p>
    </div>

    <div class="item">
    <p><img class="founders" src="https://ca.slack-edge.com/T011Q5YH07R-U012BA4GL2W-1eb61206b7bc-512" alt="Petr Jandal"></p>
    <h1 class="textColor">Petr Jandal</h1>
    <p class="text textColor">about Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima voluptatibus dolorem facilis natus quis deserunt quas sequi aliquam voluptas autem! Autem architecto quos ab in sunt beatae veritatis quod esse?</p>
    </div>

    <div class="item">
        <p><img class="founders" src="https://ca.slack-edge.com/T011Q5YH07R-U012B9TGDC2-b748a341c03f-512" alt="Michal Raštica"></p>
        <h1 class="textColor">Michal Raštica</h1>
        <p class="text textColor">Why did I decide to learn programing? It is a good question. I spent some time thinking about my career. All the jobs which I had were well paid, but I never really like them. So as I was searching for something interesting, I tried few things, including some basic programming. After few hours I found it is just what I want to do.</p>
        </div>
    </section>
  </body>

@endsection