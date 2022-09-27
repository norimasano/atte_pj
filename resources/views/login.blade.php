<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="/login" method="post">
    @csrf

    <label>メールアドレス</label><br>
    <input type="email" name="email"><br>
    <label>パスワード</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="送信する">
  </form>

</body>

</html>