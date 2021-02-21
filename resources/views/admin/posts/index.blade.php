@extends('admin.layouts.app')

@section('title', 'Listagem dos posts')

@section('content')
<a href="{{ route('posts.create') }}"> Criar novo post</a>
    <hr>
    @if(session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
    <h1>Index de Post</h1>

    <form action="{{ route('posts.search') }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="filtrar">
        <button type="submit">Pesquisar</button>
    </form>

    <h2>Posts</h2>
        @foreach ($posts as $post)
            <p>{{ $post->title }} [<a href="{{ route('posts.show', $post->id) }}">Ver</a>]
                [<a href="{{ route('posts.edit', $post->id) }}">Editar</a>]
        </p>
        @endforeach
<hr>

@if (isset($filter))
    {{ $posts->appends($filter)->links() }}
@else
    {{ $posts->links() }}
@endif
@endsection
