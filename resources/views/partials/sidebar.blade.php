
 <aside id="aside" class="aside--closed">
   
    <div id="sidebar" class="sidebar">
      <img class="icon" src="/images/menu.svg" alt="menu-icon">
    </div>
    <div id="menu" class="menu">
      <ul><h1 class="menu_title">Menu</h1>
        <li><a class="sidebar_link" href="{{ url('/home')}}">Home</a></li>
        <li><a class="sidebar_link" href="{{ url('/accounts')}}">Accounts</a></li>
        <li><a class="sidebar_link" href="{{ url('/products')}}">Products</a></li>
        <li><a class="sidebar_link" href="{{ url('/about_us')}}">About Us</a></li>
      </ul>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#aside').hover(function(){
                $('#aside').toggleClass('aside--open');
            });
        });
      </script>

</aside>


