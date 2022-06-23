<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Hello Laravel</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  <div class="container">
    <header>
      <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('profile') }}">Profilo utente</a></li>
      </ul>
    </header>
    <h1>Ciao {{ $name }}, Bentornato!</h1>
    <h2>La tua Wishlist comprende:</h2> 
    <ul class="cart">
      @foreach ($cart as $item)
        <li><strong>{{ $item['name'] }}</strong>: € {{ $item['price']}}</li>        
      @endforeach
    </ul>
</div>
</body>
</html>