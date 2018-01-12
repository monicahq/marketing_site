@if ($paginator->hasPages())

  <div class="tc mw8 center mb4">
    <div class="dib overflow-hidden ba br2 b--light-silver">
      <nav class="cf" data-name="pagination-numbers-bordered">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="fl dib link dim black f6 f5-ns b pa3 br b--light-silver" href="" disabled title="Previous">&larr; Previous</a>
        @else
            <a class="fl dib link dim black f6 f5-ns b pa3 br b--light-silver" href="{{ $paginator->previousPageUrl() }}" title="Previous">&larr; Previous</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="fr dib link dim black f6 f5-ns b pa3" href="{{ $paginator->nextPageUrl() }}" title="Next">Next &rarr;</a>
        @else
            <a class="fr dib link dim black f6 f5-ns b pa3" href="#" title="Next">Next &rarr;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="dtc link dim white bg-blue f6 f5-ns b pa3 br b--light-silver" href="#" title="1">{{ $page }}</a>
                    @else
                        <a class="dtc link dim black f6 f5-ns b pa3 br b--light-silver" href="{{ $url }}" title="2">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
      </nav>
    </div>
  </div>
@endif
