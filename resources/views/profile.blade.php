<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Profile</title>
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
    <h2>Profilo di {{ $name }} {{ $lastname }}</h2>  
  </div>
</body>
</html>