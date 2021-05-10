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
        <li class="active">
          <a href="{{ route('home') }}">Home</a>
        </li>
        <li>
          <a href="#">Prodotti</a>
        </li>
        <li>
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