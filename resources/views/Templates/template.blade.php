<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  </head>
  <body>

    <div class="header-container">

      <div class="logo-container">
        <img src="{{ asset('images/rockstar-logo.png') }}" alt="rockstar-logo">
      </div>

      <div class="menu-container">

          @foreach($menus as $menu)
            <div class="dropdown">
              <button class="dropbtn">{{$menu->menu_name}}</button>
              <div class="dropdown-content">
                @foreach($submenus as $submenu)
                  @if($submenu->menu_parent == $menu->menu_id)
                    <a href="#">{{$submenu->menu_name}}</a>
                  @endif
                @endforeach
              </div>
            </div>
          @endforeach

      </div>

    </div>

    @yield('content')

    <div class="footer-container">

      <div class="shareButtons-container">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-youtube"></i>
        <i class="fab fa-twitch"></i>
      </div>

      <div class="informations-container">
        <a href="">subscribe</a>
        <a href="">support</a>
        <a href="">careers</a>
        <a href="">mouthoff</a>
        <a href="">press</a>
        <a href="">corporate</a>
        <a href="">privacy</a>
        <a href="">legal</a>
      </div>

      <div class="language-container">
        <i class="fas fa-globe">English</i>
      </div>

      <div class="footerLogo-container">
        <img src="{{ asset('images/rockstar-logo.png') }}" alt="rockstar-logo">
      </div>

    </div>

  </body>
</html>
