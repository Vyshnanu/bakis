<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>

    @include('partials._header')

  </head>
  <body>

    @include('partials._nav')

    <div class="container">
      @include('partials._messages')
    </div>

    <section class="section">

      <div class="container">

        @yield('section')

      </div>

      </section>

    @include('partials._footer')

  </body>
</html>
