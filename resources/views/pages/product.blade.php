@extends('../layouts/main_layout')

@section('page_title')
    I Prodotti | La Molisana
@endsection

@section ('content')
<main class="product_main">  
  <div class="container">
    {{-- titolo --}}
    <h1 class="mrg_up_down_20"> {{ $paste[$id]["titolo"] }}</h1>
    {{-- /titolo --}}

    {{-- immagini --}}
    <img src="{{ asset($paste[$id]["src-h"]) }}">
    <img src="{{ asset($paste[$id]["src-p"]) }}" alt="{{ asset($paste[$id]["titolo"]) }}">
    {{-- /immagini --}}

    {{-- descrizione --}}
    <p>
      {!! $paste[$id]["descrizione"] !!}
    </p>
    {{-- /descrizione --}}
  </div>

</main>
@endsection