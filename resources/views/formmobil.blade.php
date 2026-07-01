<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Mobil</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/formmobil.css') }}">
</head>
<body>


<div class="container">

<div class="header">
  <div class="left">
    <img src="{{ asset('image/logo.png') }}" class="logo">
    <span class="brand">MITSUBISHI MOTORS</span>
  </div>

  <a href="{{ url('/daftarmobil') }}" class="back">
    ← Kembali
  </a>
</div>

  <!-- Form -->
   <form class="form-grid"
      action="{{ route('mobil.store') }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <div class="form-group">
      <label>Nama Mobil :</label>
      <input
    type="text"
    name="nama_mobil"
    placeholder="Enter your text here"
>
    </div>

    <div class="form-group">
      <label>Bahan Bakar :</label>
      <input
    type="text"
    name="bahan_bakar"
    placeholder="Enter your text here"
>
    </div>

    <div class="form-group">
      <label>Tipe Mobil :</label>
      <input
    type="text"
    name="tipe_mobil"
    placeholder="Enter your text here"
>
    </div>

    <div class="form-group">
      <label>Transmisi :</label>
      <input
    type="text"
    name="transmisi"
    placeholder="Enter your text here"
>
    </div>

    <div class="form-group">
      <label>Harga :</label>
      <input
    type="number"
    name="harga"
    placeholder="0"
>
    </div>

    <div class="form-group">
      <label>Kapasitas Penumpang :</label>
      <input
    type="number"
    name="kapasitas_penumpang"
    placeholder="0"
>
    </div>

    <div class="form-group">
      <label>Jenis :</label>
      <input
    type="text"
    name="jenis"
    placeholder="Enter your text here"
>
    </div>

    <div class="form-group">
      <label>Kapasitas Mesin :</label>
      <input
    type="number"
    name="kapasitas_mesin"
    placeholder="0"
>
    </div>

    <div class="form-group">
      <label>Warna :</label>
      <input
    type="text"
    name="warna"
    placeholder="Enter your text here"
>

    </div>

    <!-- Button -->
    <div class="btn-area">
      <button type="submit">save</button>
    </div>

  </form>

</div>

</body>
</html>