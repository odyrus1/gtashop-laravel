<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>
    {{-- {{dd($menus)}} --}}
    <div class="header-container">

      <div class="logo-container">
        <img src="{{ asset('images/rockstar-logo.png') }}" alt="rockstar-logo">
      </div>

      <div class="menu-container">
        <ul>
          @foreach($menus as $menu)
              <li class="menu-level-1"><a href="">{{$menu->menu_name}}</a>
                @foreach($submenus as $submenu)

                @if($submenu->menu_parent == $menu->menu_id)
                  <span class="menu-level-2">{{$submenu->menu_name}}</span>
                @endif

                @endforeach
              </li>
          @endforeach
        </ul>
      </div>

    </div>

    @yield('content')
    <script type="text/javascript">

    </script>
    <script src="{{ asset('js/menus.js') }}"></script>
  </body>
</html>
