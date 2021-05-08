<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    {{-- /Google Font --}}

    <!-- font awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />        <!-- /font awesome -->
		<!-- /font awesome -->

    <title>Molisana</title>

    {{-- foglio di stile --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
    {{-- intestazione --}}
    @include('partials.header')
    {{-- /intestazione --}}

    {{-- corpo del progetto --}}
    @include('home.home_page_main')
    {{-- /corpo del progetto --}}

    {{-- footer --}}
    @include('partials.footer')
    {{-- /footer --}}

  </body>
</html>