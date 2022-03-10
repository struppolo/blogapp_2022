@extends('layouts.template')
@section('content')

<h1>Risultati della ricerca ({{ $posts->count() }} risultato/i)</h1>
<h2>Hai cercato "{{ $request->get('cerca') }}"</h2>
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
