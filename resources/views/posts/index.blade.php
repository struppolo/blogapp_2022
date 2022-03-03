@extends('layouts.template')
@section('content')
<h1>I miei posts</h1>
<table class="table table-striped table-bordered">
   <tr>
    <th>Titolo</th>
    <th>Data Inserimento</th>
    <th>Azioni</th>
</tr>
@foreach ($posts as $post)
<tr>
<td>
{{ $post->titolo }}
</td>
<td>
    {{ $post->created_at }}
    </td>
<td>
<a href="{{ route('posts.edit',$post->id) }}">Modifica</a> <a href="{{ route('posts.destroy',$post->id) }}">Elimina</a>
</td>
</tr>
@endforeach
</table>
@endsection
