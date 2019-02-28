<div class="pagination-wrapper">
  @if ($currentPage > 1)
    <a
      class="pagination-button"
      href="{{$path . '?page=' . ($currentPage - 1)}}"
    >
      <
    </a>
  @endif

  @foreach ($pages as $page)
    <a
      class="pagination-button"
      @if ($page != $currentPage)
        href="{{$path . '?page=' . $page}}"
      @endif
    >
        {{ $page }}
    </a>
  @endforeach

  @if ($currentPage < $total)
    <a
      class="pagination-button"
      href="{{$path . '?page=' . ($currentPage + 1)}}"
    >
      >
    </a>
  @endif
</div>