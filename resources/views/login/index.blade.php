<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ログインページ</h1>
    <form action={{ route("login.store") }} method="POST">
        @csrf
        <label for="email">メールアドレス</label>
        <input type="email" name="email">

        <label for="password">パスワード</label>
        <input type="password" name="password">

        <button type="submit">ログイン</button>
    </form>
</body>
</html>