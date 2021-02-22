<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\infoPost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::all();

        return view('posts.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // salvataggio post
        $data = $request->all();
        $post = new Post();
        $post->fill($data);
        $post->save();

        // salvataggio infoPost
        $data["post_id"] = $post->id; //devo specificare il nuovo post_id con l'id del post creato
        $infoPost = new infoPost();
        $infoPost->fill($data);
        $infoPost->save();

        return redirect()->route('posts.index')->with('message', 'Post creato correttamente!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // modifica post
        $data = $request->all();
        $post->update($data);

        // modifica infoPost

        // $infoPost = InfoPost::where('post_id', $post->id)->first();
        $infoPost = $post->infoPost;
        $data["post_id"] = $post->id; //devo specificare il post_id con l'id del post modificato
        $infoPost->update($data);

        return redirect()->route('posts.index')->with('message', 'Post modificato correttamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('message', 'Post elminato correttamente!');
    }
}
