<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'YurucharaGO') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <header class="header">
        <h1 class="header__logo">
          <a href="{{ url('/') }}">
            {{ config('app.name', 'YurucharaGO') }}
          </a>
        </h1>
        <!-- Authentication Links -->
        @guest
          <a class="header__login" href="{{ route('login') }}">{{ __('Login') }}</a>
        @else
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        @endguest
      </header>
      <main class="wrapper">
            @yield('content')
      </main>
      <div class="footer-margin"></div>
      <footer class="footer">
        <nav class="menu">
          <ul class="menu__list">
            <li class="menu__item"><a href="{{ action('PagesController@index') }}" class="menu__btn"><img src="{{ asset('images/map.png') }}"></a></li>
            <li class="menu__item"><a href="{{ action('MapViewController@search') }}" class="menu__btn"><img src="{{ asset('images/search.png') }}"></a></li>
            <li class="menu__item"><a href="{{ action('PagesController@cardlist') }}" class="menu__btn"><img src="{{ asset('images/torophy.png') }}"></a></li>
            <li class="menu__item"><a href="{{ action('PagesController@configuration') }}" class="menu__btn"><img src="{{ asset('images/setting.png') }}"></a></li>
          </ul>
        </nav>
      </footer>
</body>
</html>
