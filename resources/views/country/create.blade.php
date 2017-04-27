<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="/country/new" method="post">
      {!! csrf_field() !!}
      <label for="name">Ime naše nove države:</label><br>
      <input type="text" name="name" id="name" required><br>

      <input type="submit">
</form>
  </body>
</html>
