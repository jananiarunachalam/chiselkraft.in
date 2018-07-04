@extends('layouts.minimal',[
  'PAGE_TITLE' => ' ERROR '.$ERR_CODE,
  'PAGE_ID' => 'ERR_'.$ERR_CODE,
])

@section('INJ_HEAD')
<style>
  :root{--prime:#FFFFFF;--accent:#EF626C;}
  body{background:var(--prime);color:var(--accent);}.btn{color:var(--prime);background:var(--accent);}
  html,body{width:100%;height:100%;}body{margin:0;font-family:Arial,Helvetica,sans-serif;font-size:0.96rem;line-height:1.45;}h1,h2,h3,h4,h5,h6{margin:0;font-family:Impact,Haettenschweiler,'Arial Narrow Bold',sans-serif;letter-spacing:1.4px;}h1{font-size:4.8rem;}h2{font-size:3.6rem;}h3{font-size:2.75rem;}h4{font-size:2.3rem;}h5{font-size:1.8rem;}h6{font-size:1.4rem;}p{text-align:justify;font-family:'Lucida Sans','Lucida Sans Regular','Lucida Grande','Lucida Sans Unicode',Geneva,Verdana,sans-serif;}a{text-decoration: none;}.wrap-center{height:100%; width:100%;display:flex;flex-direction:row;align-items: center; justify-content: center;}.row{max-width: 768px; padding: 1rem 2rem;}.bold{font-weight:700;}.light{font-weight:300;}.btn{display:inline-block;text-align:center;white-space:nowrap;padding:.5rem 1.2rem;font-size:1rem;letter-spacing:.1rem;vertical-align:middle;border:1px solid transparent;border-radius:2rem;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;}.btn:focus,.btn:hover{text-decoration:none}.btn.focus,.btn:focus{outline:0;-webkit-box-shadow:0 0 0 .2rem rgba(0,123,255,.25);box-shadow:0 0 0 .2rem rgba(0,123,255,.25);}
</style>
@endsection

@section('PAGE')
@component('UI.center')
<div class="row">
  <h1>{{ $ERR_CODE }}</h1>
  <h4>{{ $ERR_TITLE }}</h4>
  {{ $slot }}
  @isset($ERR_RETURN)
  <br><span><a role="button" class="btn" href="/">return to home</a></span>
  @endisset
</div>
@endcomponent
@endsection
