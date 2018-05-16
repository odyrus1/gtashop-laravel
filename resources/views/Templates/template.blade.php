<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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

  </body>
</html>
