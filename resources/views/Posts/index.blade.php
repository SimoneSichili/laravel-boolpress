<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Post Index</title>
    </head>
    <body>
       <div class="container">
           <table class="table table-striped table-bordered my-5">
               <thead>
                    <tr>
                        <td>Titolo</td>
                        <td>Sottotitolo</td>
                        <td>Autore</td>
                        <td>Data di pubblicazione</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->subtitle }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->publication_date }}</td>
                        <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary"><i class="fas fa-search-plus"></i></a></td>
                        <td><a href="#" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a></td>
                        <td><a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                    @endforeach   
                </tbody>
           </table>
           <div class="text-right my-5">
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Crea un nuovo post</a>
           </div>
       </div>
    </body>
</html>
