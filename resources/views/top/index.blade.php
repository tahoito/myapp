<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>トップページ</h1>
    <img
        src="{{ asset('images/icon.jpeg') }}"
        alt="アイコン"
        style="width:100px;"
    >

    <form active="{{ route('top') }}">
        <label>名前</label>
        <input type="text" name="name">
        <label>メールアドレス</label>
        <input type="text" name="email">

        <button class="button">送信</button>
    </form>

    @if ($name) 
        <p>名前：{{ $name }}</p>
    @endif

    @if ($email)
        <p>メールアドレス：{{ $email }}</p>
    @endif
</body>
</html>
