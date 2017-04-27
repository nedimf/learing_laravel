<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="/city/new" method="post">
      {!! csrf_field() !!}
      <label for="name">Ime našeg novog grada:</label><br>
      <input type="text" name="name" id="name" required><br>
     
      <br>
      <select name="country_id">
        @foreach ($countries as $country)
       
    <option value="{{$country->id}}">{{$country->name}}</option>
  

     
     @endforeach    
      </select>
      <br><br>
      <input type="submit">
</form>
  </body>
</html>
