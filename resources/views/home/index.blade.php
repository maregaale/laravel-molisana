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


    <title>Molisana</title>

    {{-- foglio di stile --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>
    {{-- intestazione --}}
    @include('partials.header')
    {{-- /intestazione --}}

    {{-- corpo del progetto --}}
    @include('partials.main')
    {{-- /corpo del progetto --}}

    {{-- footer --}}
    @include('partials.footer')
    {{-- /footer --}}

  </body>
</html>