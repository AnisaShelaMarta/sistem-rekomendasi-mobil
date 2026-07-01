<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="login-container">
  
  <img src="{{ asset('image/logo.png') }}" alt="logo">

  <h2>Login</h2>
  <p class="subtitle">Selamat Datang di Dealer Mitsubishi Banyuwangi</p>

  <form method="POST" action="/login">
  @csrf
  <input type="username" name="username" placeholder="username" required>
  <input type="password" name="password" placeholder="Password" required>

  <button type="submit">Log in</button>
</form>

</div>

</body>
</html>