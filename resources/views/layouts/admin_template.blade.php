<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/my_app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/my_app.js') }}"></script>
    <title>WEB LR RAMAZANOV</title>
  </head>
  <body>
    <div id="main-content">
      @include('includes.admin_header')
      <section id="content" class="full-width">
        @yield('content')
      </section>
      @include('includes.footer')
    </div>
  </body>
</html>