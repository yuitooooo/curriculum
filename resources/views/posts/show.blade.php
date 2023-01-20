<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>
        <h1 class="title">
            {{ $post->title }}
        </h1>  
        <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
            </div>
        <div class="edit">
            <h3>
                <a href="/posts/{{ $post->id }}/edit">編集</a>
            </h3>
        </div>
        </div>
        <div class="fotter">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
