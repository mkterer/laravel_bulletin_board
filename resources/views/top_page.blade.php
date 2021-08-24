<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>トップページ</title>
</head>
<body>
    <div class="header">
        header
    </div>

    <div class="contents">
        @foreach($topic_list as $topic)
            <div>
                {{$topic->title}}
            </div>
        @endforeach
    </div>

    <div class="footer">
        footer
    </div>
</body>
</html>