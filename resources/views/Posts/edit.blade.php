<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Post Create</title>
    </head>
    <body>
       <div class="container my-5">
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{ $post->title }}">
            </div>
            @error('brand')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    
            <div class="form-group">
                <label for="subtitle">Sottotitolo</label>
                <input subtitle="text" class="form-control" id="subtitle" name="subtitle" placeholder="Inserisci il sottotitolo"  value="{{ $post->subtitle }}">
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="author">Autore</label>
                <input author="text" class="form-control" id="author" name="author" placeholder="Inserisci l'autore"  value="{{ $post->author }}">
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="publication_date">Data</label>
                <input type="date" class="form-control" id="publication_date" name="publication_date" value="{{ $post->publication_date }}">
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="text">Testo</label>
                <textarea class="form-control" name="text" id="text"rows="6" placeholder="Inserisci il testo">{{ $post->text }}</textarea>
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="post_status">Stato del post</label>
                <select name="post_status" id="post_status" class="custom-select">
                    <option value="draft" {{ $post->infoPost->post_status == 'draft' ? 'selected' : '' }}>draft</option>
                    <option value="private" {{ $post->infoPost->post_status == 'private' ? 'selected' : '' }}>private</option>
                    <option value="public" {{ $post->infoPost->post_status == 'public' ? 'selected' : '' }}>public</option>
                </select>
            </div>
            @error('post_status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="comment_status">Stato del commento</label>
                <select name="comment_status" id="comment_status" class="custom-select">
                    <option value="open" {{ $post->infoPost->comment_status == 'open' ? 'selected' : '' }}>open</option>
                    <option value="closed" {{ $post->infoPost->comment_status == 'closed' ? 'selected' : '' }}>closed</option>
                    <option value="private" {{ $post->infoPost->comment_status == 'private' ? 'selected' : '' }}>private</option>
                </select>
            </div>
            @error('comment_status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Salva</button>

            <a href="{{ route("posts.index") }}" class="btn btn-dark">Indietro</a>
        </form>
       </div>
    </body>
</html>
