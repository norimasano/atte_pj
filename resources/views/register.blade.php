<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="/register" method="post">
    @csrf
    <label>氏名</label><br>
    <input type="text" name="name"><br>
    <label>メールアドレス</label><br>
    <input type="email" name="email"><br>
    <label>パスワード</label><br>
    <input type="password" name="password"><br>
    <label>確認用パスワード</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="送信する">
  </form>

</body>

</html>