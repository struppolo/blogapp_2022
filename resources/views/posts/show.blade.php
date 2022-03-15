@extends('layouts.template')
@section('content')
<h1>{{ $post->titolo }}</h1>
<img src="/storage/immagini/{{ $post->immagine }}"  />
{!! $post->descrizione !!}

<form method="post" action="{{ route('comments.store') }}">
@csrf
Inserisci commento<br />
<textarea name="testo" class="form-control"></textarea>
<input type="submit" value="Inserisci Commento" class="btn btn-primary">
<input type="hidden" name="post_id" value="{{ $post->id }}">
</form>

<h1>Commenti inseriti</h1>
@foreach($post->comments as $comment)
{!! $comment->testo !!} inserito da {{ $comment->user->name }} 
@if($comment->user->id==Auth::id())
<form method="post" action="{{ route('comments.destroy',$comment->id) }}">
@csrf
@method('DELETE')
<input type="submit" value="Elimina" class="btn btn-primary"> 
<form method="post" action="{{ route('comments.update',$comment->id) }}">
    @csrf
    @method('PATCH')
    <input type="submit" value="Modifica" class="btn btn-primary"> 
@endif
<hr>
@endforeach
@endsection
