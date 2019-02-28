@extends('layouts.site_template')

@section('content')
<header>
    <h1 class="title">Блог</h1>
</header>
<div id="blog">
    <div class="blog-column big">
        <h2 class="title">Посты</h2>
        <div class="blog-wrrapper">
          <div class="blog-container">
            @foreach ($items as $item)
              @include('includes.blog.item', [
                'blog' => $item
              ])
            @endforeach
          </div>
          @include('includes.pagination', $pagination)
        </div>
    </div>
</div>
@endsection