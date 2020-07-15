@extends('layout', [
  'title' => 'Forgotten Password'
])
@section('content')   
<body class="main_layout">

  <div class="flexboxforgottenpassword passwordpage">
    <form action="{{ url('/forgotten_password')}}" method="post">
  @csrf
  
    <h1 >Did you forget your password?</h1>

     @if(session('error'))
      <div>
       {{session('error')}}
      </div>
     @endif

     @if(session('success'))
     <div>
     {{session('success')}}
    </div>
    @endif
    <!-- <p>User name:</p>
    <input type="text" required> -->
    <p>Email:</p>
    <input type="email" name="email" id="email">
    <br>
    <br>
    <br>
    <button type="submit">Send to email</button> 

</form>
</div>   
</body>
@endsection