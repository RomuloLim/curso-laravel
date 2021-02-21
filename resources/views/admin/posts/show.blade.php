@extends('admin.layouts.app')

@section('title', 'Exibir posts')

@section('content')
<h1>Detalhes do post <u>{{ $post->title }}</u></h1>

<ul>
    <li><strong>Título: </strong>{{ $post->title }}</li>
    <li><strong>Conteúdo: </strong>{{ $post->content }}</li>
</ul>
<a href="{{route('posts.index')}}">Voltar</a>
<br><br>
<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit"> Deletar post </button>
</form>
@endsection
