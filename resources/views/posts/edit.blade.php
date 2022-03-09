@extends('layouts.template')
@section('content')
<form action="{{ route('posts.update',$post->id) }}" method="post">
@csrf
Titolo<br>
<input type="text" name="titolo"  class="form-control" value="{{ $post->titolo }}"/>
Descrizione
<textarea class="form-control" name="descrizione">{{ $post->descrizione }}</textarea><br />
<input type="submit" name="Aggiorna" class="btn btn-primary"/>
</form>
@endsection
