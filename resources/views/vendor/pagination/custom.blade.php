

@if ($paginator->hasPages())
<nav aria-label="Page navigation contoh">
    <ul class="pagination">

        @if ($paginator->onFirstPage())
        <li class="page-item"><a class="page-link" href="#">Sebelumnya</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Sebelumnya</a></li>
        @endif

        @foreach ($elements as $element)

        @if (is_string($element))
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $element }}</a></li>
        @endif


        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach


        @if ($paginator->hasMorePages())
        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Selanjutnya</a></li>
        @else
        <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Selanjutnya</a></li>
        @endif

    </ul>
</nav>

@endif
