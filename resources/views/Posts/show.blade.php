<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Post Show</title>
    </head>
    <body>
       <div class="container">
           <table class="table table-striped table-bordered my-5">
                <tr>
                    <td>Titolo</td>
                    <td>{{ $post->title }}</td>
                </tr>
                <tr>
                    <td>Sottotitolo</td>
                    <td>{{ $post->subtitle }}</td>
                </tr>
                <tr>
                    <td>Autore</td>
                    <td>{{ $post->author }}</td>
                </tr>
                <tr>
                    <td>Data di pubblicazione</td>
                    <td>{{ $post->publication_date }}</td>
                </tr>
                <tr>
                    <td>Testo</td>
                    <td>{{  substr($post->text, 0, 500) . '...' }}</td>
                </tr>
           </table>
           <div class="text-right">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Torna alla lista</a>
           </div>
       </div>
    </body>
</html>
