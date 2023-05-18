@if ($paginator->hasPages())
<ul class="pages">

    @if ($paginator->onFirstPage())
    <a class="btn-pagination">
        <svg xmlns="http://www.w3.org/2000/svg" class="btn-pagination-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    </a>
    @else
    <a href="{{ $paginator->previousPageUrl() }}" class="btn-pagination">
        <svg xmlns="http://www.w3.org/2000/svg" class="btn-pagination-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
    </a> @endif

    @foreach ($elements as $element)

    @if (is_string($element))
    <li class="disabled"><span>{{ $element }}</span></li>
    @endif



    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page-num active-page"><span style="color:#FFF;">{{ $page }}</span></li>
    @else
    <li class="page-num"><a href="{{ $url }}">{{ $page }}</a></li>
    @endif
    @endforeach
    @endif
    @endforeach

    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}" class="btn-pagination">
        <svg xmlns="http://www.w3.org/2000/svg" class="btn-pagination-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
    </a>
    @else
    @endif
</ul>
@endif