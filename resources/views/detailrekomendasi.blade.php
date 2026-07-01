<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Rekomendasi</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/detailrekomendasi.css') }}">
</head>
<body>

@if(session('success'))

<div class="success-message">
    {{ session('success') }}
</div>

@endif

@if(count($hasil) > 0)

<div class="page-title">
    <h1>Here's Detail Recommended</h1>
</div>

@foreach($hasil as $index => $mobil)

<div class="wrapper">


<div class="content">

    <!-- KIRI -->
    <div class="left">

        <h3>
            Ranking {{ $index + 1 }}
            -
            {{ $mobil['nama_mobil'] }}
            {{ $mobil['tipe_mobil'] }}
        </h3>

       @php
    $namaMobil = strtolower($mobil['nama_mobil']);

    if (str_contains($namaMobil, 'xpander')) {
        $gambar = 'xpander.png';
    } elseif (str_contains($namaMobil, 'xforce')) {
        $gambar = 'xforce.png';
    } elseif (str_contains($namaMobil, 'pajero')) {
        $gambar = 'pajero.png';
    } elseif (str_contains($namaMobil, ' colt')) {
        $gambar = ' colt.png';
    } else {
        $gambar = 'default.png';
    }
@endphp

<img
    src="{{ asset('image/' . $gambar) }}"
    alt="{{ $mobil['nama_mobil'] }}"
>

    </div>

    <!-- KANAN -->
    <div class="right">

        <p>
            Berdasarkan preferensi yang Anda pilih,
            <b>{{ $mobil['nama_mobil'] }}</b>
            menjadi salah satu kendaraan yang paling sesuai.
            Kombinasi desain modern, performa mesin yang tangguh,
            dan kenyamanan kabin menjadikan mobil ini pilihan
            menarik untuk mendukung mobilitas Anda.
        </p>

        <div class="detail">

            <p>
                <b>Similarity :</b>
                {{ $mobil['similarity'] }}
            </p>

            <p>
                <b>Varian :</b>
                {{ $mobil['tipe_mobil'] }}
            </p>

            <p>
                <b>Harga :</b>
                Rp {{ number_format($mobil['harga'],0,',','.') }}
            </p>

            <p>
                <b>Transmisi :</b>
                {{ $mobil['transmisi'] }}
            </p>

            <p>
                <b>Bahan Bakar :</b>
                {{ $mobil['bahan_bakar'] }}
            </p>

            <p>
                <b>Kapasitas Penumpang :</b>
                {{ $mobil['kapasitas_penumpang'] }} Orang
            </p>

            <p>
                <b>Kapasitas Mesin :</b>
                {{ $mobil['kapasitas_mesin'] }} cc
            </p>

            <p>
                <b>Warna Tersedia :</b>
            </p>
            

            <div class="palet-warna">

    @foreach($mobil['warnas'] as $warna)

        <div class="warna-detail">

            <span
                class="warna-item"
                style="background-color: {{ $warna->kode_hex }};">
            </span>

            <span>
                {{ $warna->nama_warna }}
            </span>

        </div>

    @endforeach

</div>

        </div>

    </div>

</div>


</div>

@endforeach

<div class="feedback-section-global">


<h3>Bagaimana pengalaman Anda menggunakan sistem ini?</h3>

<p>
    Berikan penilaian Anda terhadap hasil rekomendasi yang telah ditampilkan.
</p>

<a href="{{ route('uat.index') }}" class="btn-penilaian">
    Beri Penilaian
</a>


</div>


</div>

@else

<div class="wrapper">

    <h1>Detail Rekomendasi</h1>

    <div class="content">

        <div class="right">

            <h3>
                Tidak Ada Rekomendasi
            </h3>

            <p>
                Tidak ditemukan mobil dengan nilai
                similarity lebih dari atau sama dengan 0.6.
                Silakan ubah preferensi yang dimasukkan.
            </p>

        </div>

    </div>

</div>

@endif


</body>
</html>