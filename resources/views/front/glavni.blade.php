<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  @yield('head')
    <body>
        <div class="flex-center position-ref full-height">
              @yield('menu')
            <div class="content">
              @yield('content')
            </div>
        </div>
    </body>
</html>
