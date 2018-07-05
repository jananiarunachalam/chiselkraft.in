
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  {{--  META TAGS --}}
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="">
  <meta name="author" content="Chiselkraft Design Laboratory">
  <meta name="keywords" content="">
  
  {{--  TITLE  --}}
  <title>{{ $PAGE_TITLE or 'Chiselkraft Design Laboratory' }}</title>
  <link rel="shortcut icon" href="favicon.ico">

  {{-- EXTRAS --}}
  @yield('INJ_HEAD')
</head>
<body id="{{ $PAGE_ID }}" class="{{ $PAGE_STYLE or '' }}" {{ $PAGE_SCROLL or ''}}>
  {{-- CONTENT --}}
  @yield('PAGE')
  
  {{-- EXTRAS --}}
  @yield('INJ_BODY')
</body>
</html>