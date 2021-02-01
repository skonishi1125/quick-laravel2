@switch($random)
  @case(5)
    <p>大ラッキーです</p>
    @break
  @case(4)
    <p>ラッキーです</p>
    @break
  @case(3)
    <p>フツーです</p>
    @break
  @case(2)
    <p> ダメかも・・・</p>
    @break
  @default
    <p>・・・・・・・</p>
@endswitch