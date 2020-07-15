@extends('layout', [
  'title' => 'Accounts'
])

@section('content')
<body class="main_layout">
<div class="backgroundimage">
   <div class="flexboxaccounts">
       <div class="itemaccounts textColor">
           <form method="POST" action=""  name="users">
             @csrf
             <h1>Registration</h1>
            <p>Name:</p>
            <input type="text" required name="name">
            <p>Surname:</p>
            <input type="text" required name="surname">
            <p>User name:</p>
            <input type="text" required name="username">
            <p>Email:</p>
            <input type="email" required name="email">
            <p>Password:</p>
            <input type="password" minlength="8" required name="password">
            <p>Password again:</p>
            <input type="password" minlength="8" required name="password_confirmation">
            <script language='javascript' type='text/javascript'>
              function check(input) {
                  if (input.value != document.getElementById('password').value) {
                      input.setCustomValidity('Password Must be Matching.');
                  } else {
                      // input is valid -- reset the error message
                      input.setCustomValidity('');
                  }
              }
          </script>
            <br>
            <br>
            <input type="submit" value="Register">
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
            <a class="forgottenPassword" href="http://www.calculator.test/forgotten_password">Forgotten Password?</a>
            <br>
            <br>
            <button>Login</button> 

            
            
           

        </form></div>
   </div>
  </div>
</body>
@endsection
