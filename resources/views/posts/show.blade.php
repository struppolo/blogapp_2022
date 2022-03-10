@extends('layouts.template')
@section('content')
<h1>{{ $post->titolo }}</h1>
<img src="/storage/immagini/{{ $post->immagine }}"  />
{!! $post->descrizione !!}
@endsection
