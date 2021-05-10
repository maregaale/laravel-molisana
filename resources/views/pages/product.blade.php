@extends('../layouts/main_layout')

@section('page_title')
    I Prodotti | La Molisana
@endsection

@section ('content')
<main class="product_main">  
  {{-- box prodotto --}}
  <div class="container">
    {{-- titolo --}}
    <h1 class="mrg_up_down_20"> {{ $paste[$id]["titolo"] }}</h1>
    {{-- /titolo --}}

    {{-- immagini --}}
    <img src="{{ asset($paste[$id]["src-h"]) }}">
    <img src="{{ asset($paste[$id]["src-p"]) }}" alt="{{ asset($paste[$id]["titolo"]) }}">
    {{-- /immagini --}}

    {{-- descrizione --}}
    <div class="description">
      {!! $paste[$id]["descrizione"] !!}
    </div>
    {{-- /descrizione --}}
  </div>
  {{-- /box prodotto --}}

  {{-- frecce carosello --}}
  {{-- freccia sinistra --}}
  <div class="left_angle">
    <a href="{{ route('prodotto', ['id' => $prev_id]) }}">
      <i class="fas fa-angle-left"></i>
    </a>
  </div>
  {{-- /freccia sinistra --}}

  {{-- freccia destra --}}
  <div class="right_angle">
    <a href="{{ route('prodotto', ['id' => $post_id]) }}">
      <i class="fas fa-angle-right"></i>
    </a>
  </div>
  {{-- /freccia destra --}}
  {{-- /frecce carosello --}}

</main>
@endsection