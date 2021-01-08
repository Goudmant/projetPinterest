@extends('base')

@section('content')
    <div>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->dateFormated()}}</p>
        <div>
            <a href="{{ route('home') }}">Retour à la liste d'articles</a>
        </div>
        <p>{{ $article->description }}</p>
@endsection