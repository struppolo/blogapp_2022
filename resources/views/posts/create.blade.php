<form action="{{ route('posts.store') }}" method="post">
    @csrf
Titolo<br>
<input type="text" name="titolo" />
Descrizione
<input type="text" name="descrizione" />
<input type="submit" name="Invia" />

</form>