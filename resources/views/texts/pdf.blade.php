<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Текстовый документ</title>
    <style>
        @font-face {
            font-family: 'DejaVu Sans';
            src: url('{{ storage_path('fonts/DejaVuSans.ttf') }}') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        
        body {
            font-family: 'DejaVu Sans', sans-serif;
            line-height: 1.6;
            margin: 2cm;
        }
        .timestamp {
            color: #666;
            font-size: 0.9em;
            margin-bottom: 20px;
        }
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Текст</h1>
    
    <div class="content">
        {{ $text->content }}
    </div>
    
    <div class="timestamp">
        Время: {{ $text->created_at->format('Y-m-d H:i:s') }}
    </div>
</body>
</html>
