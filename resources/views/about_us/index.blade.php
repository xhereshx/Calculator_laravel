@extends('layout', [
  'title' => 'About Us'
])

@section('content')

  <body class="main_layout">

    <section class="flexbox">
    <div class="item">
    <p><img class="founders" src="https://media-exp1.licdn.com/dms/image/C5603AQHObDtvjJvAwg/profile-displayphoto-shrink_200_200/0?e=1600300800&v=beta&t=gyS5K8KQnKe9QgyTPr1Im4oFyTt3SwF3DIhzunE8SXQ" alt="Hazmin Firdaus Chik"></p>
    <h1 class="textColor">Hazmin Firdaus Chik</h1>
    <p class="text textColor">I decided to join this bootcamp to challenge myself and change my career. It's an amazing experience to learn from the experts at the bootcamp.</p>
    </div>

    <div class="item">
    <p><img class="founders" src="https://ca.slack-edge.com/T011Q5YH07R-U012BA4GL2W-1eb61206b7bc-512" alt="Petr Jandal"></p>
    <h1 class="textColor">Petr Jandal</h1>
    <p class="text textColor">All my live i was working hard man. Before few year big change happened. I got married and have my first son. From that time i was looking for better work-like ballance. I found as programmer i need just my laptop and wifi to work, so i can travel with my fammily in our caravan whole summer around all Europe. It is why i am programmer.</p>
    </div>

    <div class="item">
        <p><img class="founders" src="https://ca.slack-edge.com/T011Q5YH07R-U012B9TGDC2-b748a341c03f-512" alt="Michal Raštica"></p>
        <h1 class="textColor">Michal Raštica</h1>
        <p class="text textColor">Why did I decide to learn programing? It is a good question. I spent some time thinking about my career. All the jobs which I had were well paid, but I never really like them. So as I was searching for something interesting, I tried few things, including some basic programming. After few hours I found it is just what I want to do.</p>
        </div>
    </section>
  </body>

@endsection