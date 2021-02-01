<p>whileです↓</p>
@php
  $i = 0;
@endphp

@while ($i < 6)
  @php
    $i++;
  @endphp

  <h{{ $i }}>{{ $i }}番目です。</h{{ $i }}>

@endwhile

<p>forです↓</p>
@for($i = 1; $i <= 6; $i++)
  <h{{$i}}>{{$i}}番目です。</h{{$i}}>
@endfor
