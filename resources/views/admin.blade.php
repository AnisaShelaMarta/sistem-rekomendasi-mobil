<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

<div class="wrapper">

    <aside class="sidebar">

        <div class="sidebar-box">

            <h2>Mitsubishi</h2>

            <a href="/daftarmobil">
                🚗 Daftar Mobil
            </a>

            <a href="/penilaian">
                ⭐ Penilaian
            </a>

        </div>

    </aside>

    <main class="content">

        @yield('content')

    </main>

</div>

</body>
</html>