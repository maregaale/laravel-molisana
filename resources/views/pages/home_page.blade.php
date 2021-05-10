@extends('../layouts/main_layout')

@section('page_title')
    Home Page La Molisana
@endsection

@section ('content')
<main class="home_page_main">  
  {{-- sezione paste lunghe --}}
  <section class="long_pasta">

    <div class="container">
      {{-- titolo --}}
      <h3>le lunghe</h3>
      {{-- /titolo --}}

      <div class="long_pastas cards_container flex">

        @foreach ($paste_lunghe as $pasta)
            <div class="card">
              <img src="{{ asset($pasta['src']) }}" alt="">
            </div>
        @endforeach

      </div>
    </div>
  </section>
  {{-- /sezione paste lunghe --}}

  {{-- sezione paste corte --}}
  <section>
    <div class="container">
      {{-- titolo --}}
      <h3>le corte</h3>
      {{-- /titolo --}}

      <div class="short_pastas cards_container flex">

        @foreach ($paste_corte as $pasta)
            <div class="card">
              <a href="">
                <img src="{{ asset($pasta['src']) }}" alt="">
              </a>
            </div>
        @endforeach

      </div>
    </div>
  </section>
  {{-- /sezione paste corte --}}
    
  {{-- sezione paste cortissime --}}
  <section>
    <div class="container">
      {{-- titolo --}}
      <h3>le cortissime</h3>
      {{-- /titolo --}}

      <div class="vs_pastas cards_container flex">
        
        @foreach ($paste_cortissime as $pasta)
          <div class="card">
            <img src="{{ asset($pasta['src']) }}" alt="">
          </div>
        @endforeach

      </div>
    </div>
  </section>
  {{-- /sezione paste cortissime --}}
</main>
@endsection