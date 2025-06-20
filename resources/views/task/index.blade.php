<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>タスク一覧ページ</h1>
    <table>
        <tr>
            <th>タイトル</th>
            <th>内容</th>
            <th>作成日時</th>
            <th>更新日時</th>
        </tr>

        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task["title"] }}</td>
            <td>{{ $task["content"] }}</td>
            <td>{{ $task["created_at"] }}</td>
            <td>{{ $task["updated_at"] }}</td>
            <td>
                <a href={{ route("task.show", ["id" => $task["id"]]) }}>詳細</a>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="{{ route("task.create") }}">タスク作成</a>

</body>
</html>