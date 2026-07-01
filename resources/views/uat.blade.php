<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Sistem</title>

    <link rel="stylesheet" href="{{ asset('css/uat.css') }}">
</head>
<body>

<div class="container">

    <div class="header">
        <h1>Penilaian Sistem Rekomendasi Mobil</h1>

        <p>
            Berikan penilaian Anda terhadap sistem rekomendasi mobil
            Mitsubishi Motor Banyuwangi.
        </p>
    </div>

    <form action="{{ route('feedback.simpan') }}" method="POST">

        @csrf

        <div class="card">

            <h2>Kuesioner UAT</h2>

            <div class="question">


<p>1. Apakah sistem berhasil menampilkan rekomendasi mobil setelah Anda mengisi preferensi?</p>

<div class="rating">
    <label><input type="radio" name="q1" value="Ya" required> Ya</label>
    <label><input type="radio" name="q1" value="Tidak"> Tidak</label>
</div>


</div>

<div class="question">


<p>2. Apakah tampilan website sistem rekomendasi mobil mudah dipahami?</p>

<div class="rating">
    <label><input type="radio" name="q2" value="Ya" required> Ya</label>
    <label><input type="radio" name="q2" value="Tidak"> Tidak</label>
</div>


</div>

<div class="question">


<p>3. Apakah informasi harga dan spesifikasi mobil dapat ditampilkan dengan benar?</p>

<div class="rating">
    <label><input type="radio" name="q3" value="Ya" required> Ya</label>
    <label><input type="radio" name="q3" value="Tidak"> Tidak</label>
</div>


</div>

<div class="question">


<p>4. Apakah sistem dapat menerima dan memproses data preferensi yang dimasukkan pengguna?</p>

<div class="rating">
    <label><input type="radio" name="q4" value="Ya" required> Ya</label>
    <label><input type="radio" name="q4" value="Tidak"> Tidak</label>
</div>


</div>

<div class="question">


<p>5. Apakah hasil rekomendasi yang diberikan sesuai dengan kriteria yang dipilih pengguna?</p>

<div class="rating">
    <label><input type="radio" name="q5" value="Ya" required> Ya</label>
    <label><input type="radio" name="q5" value="Tidak"> Tidak</label>
</div>

</div>

<div class="question">


<p>6. Apakah sistem dapat menampilkan lebih dari satu alternatif mobil rekomendasi?</p>

<div class="rating">
    <label><input type="radio" name="q6" value="Ya" required> Ya</label>
    <label><input type="radio" name="q6" value="Tidak"> Tidak</label>
</div>


</div>

<div class="question">


<p>7. Apakah hasil rekomendasi yang ditampilkan memberikan informasi yang bermanfaat dalam memilih mobil?</p>

<div class="rating">
    <label><input type="radio" name="q7" value="Ya" required> Ya</label>
    <label><input type="radio" name="q7" value="Tidak"> Tidak</label>
</div>


</div>

<div class="question">


<p>8. Apakah seluruh fitur pada sistem rekomendasi mobil dapat digunakan tanpa mengalami kesalahan?</p>

<div class="rating">
    <label><input type="radio" name="q8" value="Ya" required> Ya</label>
    <label><input type="radio" name="q8" value="Tidak"> Tidak</label>
</div>


</div>


            </div>

            <button type="submit" class="btn-submit">
                Kirim Penilaian
            </button>

        </div>

    </form>

</div>

</body>
</html>