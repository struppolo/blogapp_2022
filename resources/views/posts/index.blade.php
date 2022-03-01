@foreach ($posts as $post)
<a href="{{ route('posts.show',$post->id) }}">{{ $post->titolo }}</a>

<a href="{{ route('posts.edit',$post->id) }}">Modifica</a> <a href="{{ route('posts.destroy',$post->id) }}">Elimina</a><br>
@endforeach