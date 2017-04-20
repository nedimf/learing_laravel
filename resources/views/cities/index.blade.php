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
        <li><a href="/city/{{$city->id}}">{{$city->name}} </a>
          <a href="/city/edit/{{$city->id}}">
            <button name="button">Uredi</button>
          </a>&nbsp;&nbsp;&nbsp;
          <a href="/city/delete/{{$city->id}}">
            <button name="button">Obriši</button>
          </a>
        </li>
      @endforeach
    </ul>
    <a href="/city/new"><button name="button">Novi grad</button></a>

  </body>
</html>
