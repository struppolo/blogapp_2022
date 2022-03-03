@extends('layouts.template')
@section('content')
<h1>Inserisci un articolo</h1>
<form action="{{ route('posts.store') }}" method="post">
    @csrf
Titolo<br>
<input type="text" name="titolo" class="form-control"/>
Descrizione
<textarea class="form-control" name="descrizione"></textarea>
<br />
<input type="submit" name="Invia" class="btn btn-primary"/>

</form>
@endsection
