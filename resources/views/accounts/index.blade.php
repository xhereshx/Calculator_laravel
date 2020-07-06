@extends('layout', [
  'title' => 'Accounts'
])

@section('content')
<body class="main_layout">
<div class="backgroundimage">
   <div class="flexboxaccounts">
       <div class="itemaccounts textColor">
           <form><h1>Registration</h1>
            <p>Name:</p>
            <input type="text" required>
            <p>Surename:</p>
            <input type="text" required>
            <p>User name:</p>
            <input type="text" required>
            <p>Email:</p>
            <input type="text" required>
            <p>Password:</p>
            <input type="password" minlength="8" required>
            <p>Password again:</p>
            <input type="password" minlength="8" required>
            <br>
            <br>
            <button>Register</button> 
           </form>
        </div>
       <div class="itemaccounts textColor">
           <form>
            <h1>Login</h1>
            <p>User name:</p>
            <input type="text" required>
            <p>Password:</p>
            <input type="password" minlength="8" required>
            <br>
            <a class="forgottenPassword" href="http://localhost:3000/forgotten_password">Forgotten Password?</a>
            <br>
            <br>
            <button>Login</button> 

            
            
           

        </form></div>
   </div>
  </div>
</body>
@endsection
