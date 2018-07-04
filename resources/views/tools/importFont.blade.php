{{-- load font --}}
<?php $fontstr =''; ?>
@foreach($googleFont as $font => $attr)
    
    <?php $fontstr .= $font; ?>

    @isset($attr['weight'])
        @foreach($attr['weight'] as $fontweight)
            @if($loop->first) <?php $fontstr .= ':' ?> @endif
            <?php $fontstr .= $fontweight; ?>
            @if(!$loop->last) <?php $fontstr .= ','; ?> @endif
        @endforeach
    @endisset

    @if(!$loop->last) <?php $fontstr .='|'; ?> @endif

@endforeach

<link href="https://fonts.googleapis.com/css?family={{ $fontstr }}" rel="stylesheet">

{{-- create style --}}
<style>
  @foreach($googleFont as $font => $attr)
  @isset($attr['weight'])
  @foreach($attr['weight'] as $weight)
  <?php $fontstr = '.F' . ($loop->parent->index+1) . '-' . $weight . ' { font-family: ' . $attr['family'] . '; font-weight: ' . $weight . '; }'; ?>
  {!! $fontstr !!}
  @endforeach
  @else
  <?php $fontstr = '.F' . ($loop->index+1) . ' { font-family: ' . $attr['family'] . '; }'; ?>
  {!! $fontstr !!}
  @endisset
  @endforeach
  </style>