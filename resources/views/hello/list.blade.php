<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>速習Laravel</title>
</head>
<body>
  <!-- アクション側(controller)で準備したビュー変数を使う -->

  <?php
    phpinfo();
  
  ?>

  <table class="table">
    <tr>
      <th>署名</th>
      <th>価格</th>
      <th>出版社</th>
      <th>刊行日</th>
    </tr>

    @foreach ($records as $record)
    <p>{{ $record->title }}</p>
      <tr>
        <td>{{ $record->title }}</td>
        <td>{{ $record->price }}円</td>
        <td>{{ $record->publisher }}</td>
        <td>{{ $record->published }}</td>
      </tr>
    @endforeach
  </table>

  
</body>
</html>