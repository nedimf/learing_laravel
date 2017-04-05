<!DOCTYPE html>
<html>
  @yield('headsekcija')
    <body>
        <div class="flex-center position-ref full-height">
              @include('partials.menu')
            <div class="content">
              @yield('sadrzajstranice')
            </div>
        </div>
    </body>
</html>
