<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク編集ページ</h1>

    <form action={{ route('task.update', ['id' => $task["id"]]) }} method="POST">
        @csrf 
        @method('PUT')

        <label>タイトル</label>
        <input type="text" name="title" value="{{ $task["title"] }}">

        <label>内容</label>
        <textarea name="content">{{ $task["content"] }}</textarea>

        <button name="submit">更新</button>
    </form>

    <a href="{{ route("task.show",["id" => $task["id"]]) }}">戻る</a>
    

</body>
</html>