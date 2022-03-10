<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = User::find(Auth::id())->posts;
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validated = $request->validate([
            'titolo' => 'required|max:255',
            'descrizione' => 'required',
        ]);
        if (!is_null($request->file('immagine'))) {
            $path = $request->file('immagine')->store('public/immagini');
            $nome = explode("/", $path);
        } else $nome[2] = '';

        $post = new Post;
        $post->titolo = $request->titolo;
        $post->descrizione = $request->descrizione;
        $post->user_id = Auth::id();
        $post->immagine = $nome[2];
        $post->save();

        return redirect()->route('posts.index')->with('msg', 'Articolo correttamente inserito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->titolo = $request->titolo;
        $post->descrizione = $request->descrizione;
        $post->user_id = 1;
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $post = Post::find($id);
        if(Auth::id()==$post->user->id){
        if (Storage::exists('public/immagini/' . $post->immagine)) {
            Storage::delete('public/immagini/' . $post->immagine);
        }

        $post->delete();

        return redirect()->route('posts.index')->with('msg', 'Articolo eliminato!');
    }
    return "Non hai i permessi!";
    }
}
