<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Single Post</title>
    </head>
    <body>
       <div class="container">
           <h1 class="my-5">Elenco Post</h1>
            <section class="my-5">
                <h3>{{ $post->title }}</h3>
                <h4>{{ $post->subtitle }}</h4>
                <p>{{ substr($post->text, 0, 400) . "..." }}</p>
                <h5>Autore: {{ $post->author }}</h5>
                <div>
                    <p>{{ $post->publication_date->locale('it')->isoFormat('dddd DD-MM-YYYY') }}</p>
                    <p>Post status: {{ $post->infoPost->post_status }}</p>
                    <p>Comment statis: {{ $post->infoPost->comment_status }}</p>
                </div>
                <h3>Commenti</h3>
                @foreach ($post->comments as $comment)
                    <div class="my-3">
                        <h6>{{ $comment->author }} <small>{{ $comment->created_at->diffForHumans() }}</small></h6>
                        <p>{{ $comment->text }}</p>
                    </div>
                @endforeach
            </section>           
       </div>
    </body>
</html>
