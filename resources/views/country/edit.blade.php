<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="/country/edit/{{$country->id}}" method="post">
      {!! csrf_field() !!}
      <label for="name">Unesite novi naziv drzave:</label><br>
      <input type="text" name="name" id="name" value="{{$country->name}}" required><br>
     
      <br>
      <input type="submit">
</form>

  </body>
</html>
