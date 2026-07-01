<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Recommend</title>
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
</head>
<body>

<!-- NAVBAR -->
<header class="navbar">
    <div class="logo">
        <img src="{{ asset('image/logo.png') }}" alt="logo">
    </div>

    <nav class="menu">
        <a href="#">About us</a>
        <a href="#">The Car</a>
        <a href="#">Help</a>
        <a href="#">Contact</a>
    </nav>

    <a href="/login" class="btn-login">Login</a>
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero-left">
        <h1>FIND YOUR PERFECT <br> CAR NOW!</h1>
        <p>
            rekomendasi mobil kami menganalisis berbagai kriteria penting 
            untuk memberikan saran mobil yang paling sesuai dengan kebutuhanmu. 
            Keputusan jadi lebih yakin, tanpa buang waktu.
        </p>

        <a href="{{ route('formpelanggan') }}" class="btn-main">
        Start Find The Car →
        </a>
    </div>

    <div class="hero-right">
    <div class="image-box">
        <img src="{{ asset('image/mobilLP.png') }}" alt="car">
    </div>
</div>
</section>

</body>
</html>