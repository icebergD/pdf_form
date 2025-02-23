<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel PDF Export</title>
</head>
<body>
    <h1>Ввод текста</h1>
    <form action="{{ route('texts.store') }}" method="POST">
        @csrf
        <textarea name="content" required></textarea>
        <button type="submit">Сохранить</button>
    </form>

    <h2>Сохранённые записи</h2>
    <ul>
        @foreach($texts as $text)
            <li>
                {{ $text->content }} - {{ $text->created_at }}
                <a href="{{ route('texts.exportPdf', $text->id) }}">Экспорт в PDF</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
