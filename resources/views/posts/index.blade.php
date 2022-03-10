@extends('layouts.template')
@section('content')
@if(Session::has('msg'))
<div class="alert alert-success" role="alert">
    {{ Session::get('msg') }}
  </div>

@endif
<h1>I miei posts</h1>
<table class="table table-striped table-bordered">
   <tr>
    <th>Titolo</th>
    <th>Data Inserimento</th>
    <th colspan="2">Azioni</th>
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
<a href="{{ route('posts.edit',$post->id) }}"><i class="fa-solid fa-pencil fa-lg"></i></a>
</td>
<td> <a href="{{ route('posts.destroy',$post->id) }}"><i class="fa-solid fa-trash fa-lg"></i></a>
</td>
</tr>
@endforeach
</table>
@endsection
