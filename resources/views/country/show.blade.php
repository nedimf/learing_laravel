<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>{{$country->name}}</h1>
    <h1>Gradovi</h1>
     
    @foreach ($citiesOfMyCountry as $city)
        
        <ul>
        

        <li>{{$city->name}}</li>
        
        </ul>

    @endforeach
    

  </body>
</html>
