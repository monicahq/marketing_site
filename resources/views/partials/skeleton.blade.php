<!DOCTYPE html>
<html lang="en">

  @include('partials.header')

  <body class="sans-serif">
    @include ('partials.menu')

    @yield('content')

    @include ('partials.footer')

  </body>
</html>
