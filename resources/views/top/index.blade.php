<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>トップページ</h1>
    @if ($age >= 20)
        <p>お酒が飲めます</p>
    @elseif ($age >= 18)
        <p>免許が取れます</p>
    @else
        <p>未成年です</p>
    @endif
</body>
</html>