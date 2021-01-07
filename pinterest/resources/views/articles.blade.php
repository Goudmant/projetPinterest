@extends('base')

@section('content')
    <div>
        <h1>Articles</h1>
        <div>
            @foreach ($articles as $article)
                    <div>
                        <h5>{{ $article->title }}</h5>
                        <p>{{$article->description}}</p>
                        <a href="{{ route('article', $article->slug) }}">Lire la suite</a>
                    </div>
            @endforeach
        </div>
        <div>
            {{ $articles->links('vendor.pagination.custom') }}
        </div>
    </div>
@endsection