{{-- resources/views/vendor/pagination/custom.blade.php --}}
@if ($paginator->hasPages())
    <ul class="pagination custom-pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($paginator->getElements() as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">Next</span>
            </li>
        @endif
    </ul>
@endif


<style>
    /* Custom Pagination Styles */
.pagination.custom-pagination {
    display: flex;
    justify-content: center;
    padding: 20px 0;
}

.pagination.custom-pagination .page-item {
    margin: 0 5px;
}

.pagination.custom-pagination .page-link {
    padding: 10px 15px;
    background-color: #f4f4f4;
    color: #333;
    border: 1px solid #ccc;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
}

.pagination.custom-pagination .page-link:hover {
    background-color: #007bff;
    color: #fff;
}

.pagination.custom-pagination .page-item.active .page-link {
    background-color: #007bff;
    color: #fff;
}

.pagination.custom-pagination .page-item.disabled .page-link {
    background-color: #f0f0f0;
    color: #ddd;
    pointer-events: none;
}

.pagination.custom-pagination .page-item:first-child .page-link {
    border-radius: 5px 0 0 5px;
}

.pagination.custom-pagination .page-item:last-child .page-link {
    border-radius: 0 5px 5px 0;
}

</style>
