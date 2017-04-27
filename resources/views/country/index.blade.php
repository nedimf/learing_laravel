<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Drzave</h1>
    <ul>
      @foreach ($countries as $country)
        <li><a href="/country/{{$country->id}}">{{$country->name}} </a>
          <a href="/country/edit/{{$country->id}}">
            <button name="button">Uredi</button>
          </a>&nbsp;&nbsp;&nbsp;
          <a href="/country/delete/{{$country->id}}">
            <button name="button">Obriši</button>
          </a>
        </li>
      @endforeach
    </ul>
    <a href="/country/new"><button name="button">Nova drzava</button></a>

  </body>
</html>
