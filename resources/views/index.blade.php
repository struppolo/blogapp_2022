@extends('layouts.template')
@section('content')
<div class="jumbotron">
    <h1 class="display-4">BlogApp!</h1>
    <p class="lead">Questa è una semplice app di esempio costruita con Laravel 8</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Registrati</a>
    </p>
  </div>
  @auth
  <h2>Ciao {{ Auth::user()->name }}</h2>
  @endauth

  @foreach ($posts as $post)
  <div class="card">
  <div class="card-header">
     <a href="{{ route('posts.show',$post->id) }}">{{ $post->titolo }}</a>
  </div>
  <div class="card-body">
      @if( $post->immagine!='')
      <img src="/storage/immagini/{{ $post->immagine }}" width="200" class="img-thumbnail" />
      @endif
  {!! $post->descrizione !!},
  </div>
   <div class="card-footer">
   Inserito da {{ $post->user->name }} il {{ \Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}
  </div>
</div>
<hr>

  @endforeach
  {{ $posts->links() }}
@endsection
