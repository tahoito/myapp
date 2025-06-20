<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク詳細ページ</h1>

    <p>タイトル：{{ $task["title"] }}</p>
    <p>内容：{{ $task["content"] }}</p>
    <p>作成日時：{{ $task["created_at"] }}</p>
    <p>更新日時：{{ $task["updated_at"] }}</p>

    <a href="{{ route("task") }}">戻る</a>
    <a href="{{ route("task.edit" , ["id" => $task["id"]] }}">編集</a>

</body>
</html>