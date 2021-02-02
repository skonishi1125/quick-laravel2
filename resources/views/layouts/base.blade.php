<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  <img src="https://wings.msn.to/image/wings.jpg" title="ロゴ">
  
  <hr>
  @section('main')
  <p>既定のコンテンツです。あっとparentをmasterに書き込むと表示させられます</p>
  @show
  <hr>

  <p>copyright.2021.kirbis.</p>
  
</body>
</html>