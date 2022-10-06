<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="/" method="post">
    @csrf
    <a href="/work/start" class="xxx-btn">勤務開始</a>
    <a href="/work/end" class="xxx-btn">勤務終了</a>
    <a href="/breaking/start" class="xxx-btn">休憩開始</a>
    <a href="/breaking/end" class="xxx-btn">休憩終了</a>
  </form>

</body>

</html>