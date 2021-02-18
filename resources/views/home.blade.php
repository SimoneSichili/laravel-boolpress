<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>
    </head>
    <body>
       <div class="container">
           <h1 class="my-5">Elenco Post</h1>
           @foreach ($posts as $post)
               <section class="my-5">
                   <h3>{{ $post->title }}</h3>
                   <h4>{{ $post->subtitle }}</h4>
                   <p>{{ $post->text }}</p>
                   <h5>Autore: {{ $post->author }}</h5>
                   <p>Post status: {{ $post->infoPost->post_status }}</p>
                   <p>Comment statis: {{ $post->infoPost->comment_status }}</p>
               </section>
           @endforeach
       </div>
    </body>
</html>
