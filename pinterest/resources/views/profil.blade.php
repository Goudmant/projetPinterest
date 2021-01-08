@extends('base')

@section('content')
    @foreach ($articles as $article)
    <div>
        <h5>{{ $article->title }}</h5>
        <p>{{ $article->dateFormated() }}</p>
        {{-- <a href="{{ route('user/edit', $article->slug) }}">Éditer</a> --}}
        {{-- <a href="{{ route('user/delete', $article->slug) }}">Supprimer</a> --}}
    </div>
    @endforeach
    <div>
        {{ $articles->links('vendor.pagination.custom') }}
    </div>
@endsection