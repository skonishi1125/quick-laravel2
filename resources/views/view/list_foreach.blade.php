<table class="table">
  <tr>
    <!-- 追加 -->
    <th>No.</th>
    <th>署名</th>
    <th>価格</th>
    <th>出版社</th>
    <th>刊行日</th>
  </tr>

  @foreach ($records as $id => $record)
  <tr>
    <!-- 追加 -->
    <td>{{$id + 1}}</td>
    <td>{{ $record->title }}</td>
    <td>{{ $record->price }}円</td>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->published }}</td>
  </tr>

  @endforeach



</table>