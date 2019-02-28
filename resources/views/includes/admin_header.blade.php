<div class="navigation-container full-width">
  @auth('admin')  
  <div class="navigation-wrapper">
    <nav class="nav-item">
      <a href="{{ route('admin.blog') }}">Редактор блога</a>
    </nav>
    <nav class="nav-item">
      <a href="{{ route('admin.auth.logout') }}">Выйти</a>
      <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </nav>
  </div>
  @endauth
</div>