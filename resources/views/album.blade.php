@extends('layouts.site_template')

@section('content')
<section>
    <div class="gallery">
    @foreach ($images as $image)
      <div class="img-wrap">
        <img class="album-image" data-id="{{ $loop->index }}" src="{{ $image['image'] }}">
        <span class="img-description">{{ $image['title'] }}</span>
        <div class="pop-up-description">{{ $image['description'] }}</div>
      </div>
    @endforeach
    </div>
    <div class="image-full-view"  style="display: none;">
        <div class="carousel-container">
            <div class="counter">
                <span class="curr">0</span>/<span class="total">0</span>
            </div>
            <div class="carousel">
                <div class="toggle prev">
                    <span class="arrow left"></span>
                </div>
                <ul>
                @foreach($images as $image)
                  <li>
                    <img src="{{ $image['image'] }}">
                  </li>
                @endforeach        
                </ul>
                <div class="toggle next">
                    <span class="arrow right"></span>
                </div>
            </div>
            <div class="image-title">
                <p>asdfasd asdfasdf</p>
            </div>
        </div>
    </div>
</section>
@endsection