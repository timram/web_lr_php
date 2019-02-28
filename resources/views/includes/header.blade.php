<div class="navigation-container full-width">
  <div class="navigation-wrapper">
    <nav class="nav-item">
        <a href="/">Главная</a>
    </nav>
    <nav class="nav-item">
        <a href="{{ route('about-me') }}">Обо мне</a>
    </nav>
    <nav class="nav-item">
        <a href="{{ route('album') }}">Фотоальбом</a>
    </nav>
    <nav class="nav-item">
        <a href="{{ route('blog') }}">Блог</a>
    </nav>
    <nav class="nav-item date">
        <div class="date">
        </div>
    </nav>
    <nav class="nav-item">
      @guest
        <a href="{{ route('login') }}">Войти</a>
      @else
        <a href="{{ route('logout') }}">Выйти</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      @endguest
  </nav>
  </div>
</div>