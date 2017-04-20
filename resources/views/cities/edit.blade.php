<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="/city/edit/{{$city->id}}" method="post">
      {!! csrf_field() !!}
      <label for="name">Unesite novi naziv grada:</label><br>
      <input type="text" name="name" id="name" value="{{$city->name}}" required><br>
      <label for="zip">Unesite novi zip code:</label><br>
      <input type="text" name="zip" id="zip" value="{{$city->zip}}" required>
      <br>
      <input type="submit">
</form>
  </body>
</html>
