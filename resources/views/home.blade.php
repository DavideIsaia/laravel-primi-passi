<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello Laravel</title>
</head>
<body>
  <h1>Ciao {{ $name }}, Bentornato!</h1>
  <h3>La tua Wishlist comprende:</h3> 
  <ul>
    @foreach ($cart as $item)
      <li><strong>{{ $item['name'] }}</strong>: € {{ $item['price']}}</li>        
    @endforeach
  </ul>
</body>
</html>