<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>サインアップページ</h1>
    <form action={{ route('sign_up.store') }} method="POST">
        @csrf
        <label>名前</label>
        <input type="text" name="name">

        <label>メールアドレス</label>
        <input type="email" name="email">

        <label for="password">パスワード</label>
        <input type="password" name="password">

        <label for="password">パスワード確認</label>
        <input type="password" name="passwordConfirmation">

        <button type="submit">サインアップ</button>
    </form>

    {{-- エラーがある場合に表示する --}}
    @if ($error)
        <p>{{ $error }}</p>
    @endif 

</body>
</html>