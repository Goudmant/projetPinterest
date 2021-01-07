@extends('base')

@section('content')
    <div>
        <h2>{{ $article->title }}</h2>
        <div>
            <a href="{{ route('articles') }}">Retour à la liste d'articles</a>
        </div>
        <p>{{ $article->description }}</p>
@endsection