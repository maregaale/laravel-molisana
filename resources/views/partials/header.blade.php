<header>
  <div class="container">
    {{-- logo --}}
    <div class="logo_container">
      <img class="logo mrg_up_down_40" src="{{ asset('img/marchio-sito-test.png')}}" alt="Logo Marchio">
    </div>
    {{-- /logo --}}

    {{-- main_nav --}}
    <nav class="main_nav">
      <ul class="flex">
        <li class="{{\Request::route()->getName() == 'home' ? 'active' : null}}">
          <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="{{\Request::route()->getName() == 'prodotto' ? 'active' : null}}">
          <a href="{{ route('prodotto', ['id' => 0]) }}">Prodotti</a>
        </li>
        <li class="{{\Request::route()->getName() == 'news' ? 'active' : null}}">
          <a href="#">News</a>
        </li>
      </ul>
    </nav>
    {{-- /main_nav --}}

    {{-- hamburger menu --}}
    <div class="ham_menu">
      <i class="fas fa-bars"></i>
    </div>
    {{-- hamburger menu --}}

  </div>
</header>