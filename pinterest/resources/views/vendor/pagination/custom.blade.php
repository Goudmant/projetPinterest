@if($paginator->hasPages())
<ul>
    @if ($paginator->onFirstPage())
        <li><span>Précédent</span></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">Précédent</a></li>
    @endif
    @foreach ($elements as $element)
        @if (is_string($element))
        <li>
            <span>{{ $element }}</span>
        </li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page =>$url)
                @if ($page == $paginator->currentPage())
                <li>
                    <span>{{ $page }}</span>
                </li>
                @else
                    <li>
                        <a href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach
    @if ($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}" rel="prev">Suivant</a></li>
    @else
        <li><span>Suivant</span></li>
    @endif
</ul>
@endif