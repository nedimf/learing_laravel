<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Gradovi</h1>
    <ul>
      @foreach ($cities as $city)
        <li><a href="/city/{{$city->id}}">{{$city->name}} </a></li>
      @endforeach
    </ul>

  </body>
</html>
