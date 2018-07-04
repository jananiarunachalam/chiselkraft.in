{{-- global config --}}
@isset($PAGE_FONT)@else <?php $PAGE_FONT = config('site.global.googleFont'); ?> @endisset
@isset($PAGE_CSS)@else  <?php $PAGE_CSS  = config('site.global.css') ?> @endisset
@isset($PAGE_JS)@else   <?php $PAGE_JS   = config('site.global.js') ?> @endisset

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
  
  {{-- WEBFONTS & CSS --}}
  @include('tools.importFont',['googleFont' => $PAGE_FONT])
  @foreach($PAGE_CSS as $stylesheet) <link rel="stylesheet" href="{{ $stylesheet }}"> @endforeach

  {{-- EXTRAS --}}
  @yield('INJ_HEAD')

  {{-- FALLBACK --}}
  <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body id="{{ $PAGE_ID or 'home-page'}}" class="{{ $PAGE_STYLE or '' }}" {{ $PAGE_SCROLL or ''}}>
  {{-- CONTENT --}}
  @yield('PAGE')
  
  {{-- JAVASCRIPT --}}
  @foreach($PAGE_JS as $script) <script src="{{ $script }}"></script> @endforeach
  
  {{-- EXTRAS --}}
  @yield('INJ_BODY')
</body>
</html>