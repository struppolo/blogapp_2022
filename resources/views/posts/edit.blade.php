<form action="{{ route('posts.update',$post->id) }}" method="post">
@csrf
Titolo<br>
<input type="text" name="titolo" value="{{ $post->titolo }}"/>
Descrizione
<input type="text" name="descrizione" value="{{ $post->descrizione }}"/>
<input type="submit" name="Aggiorna" />
</form>