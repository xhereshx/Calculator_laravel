<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="images/icon.png" type="image/png" sizes="32x32">
  <link rel="stylesheet" href="{{'/css/app.css'}}">
  <title> {{ $title }} | Calculator Hub</title>
  @yield('styles')
</head>
<body>
  
    @include('partials.sidebar')

    @yield('content')

</body>
</html>