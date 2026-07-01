<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Mobil</title>
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

<form class="form-grid"
      action="{{ route('mobil.update', $mobil->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="form-group">
      <label>Nama Mobil :</label>
      <input
        type="text"
        name="nama_mobil"
        value="{{ $mobil->nama_mobil }}"
      >
    </div>

    <div class="form-group">
      <label>Bahan Bakar :</label>
      <input
        type="text"
        name="bahan_bakar"
        value="{{ $mobil->bahan_bakar }}"
      >
    </div>

    <div class="form-group">
      <label>Tipe Mobil :</label>
      <input
        type="text"
        name="tipe_mobil"
        value="{{ $mobil->tipe_mobil }}"
      >
    </div>

    <div class="form-group">
      <label>Transmisi :</label>
      <input
        type="text"
        name="transmisi"
        value="{{ $mobil->transmisi }}"
      >
    </div>

    <div class="form-group">
      <label>Harga :</label>
      <input
        type="number"
        name="harga"
        value="{{ $mobil->harga }}"
      >
    </div>

    <div class="form-group">
      <label>Kapasitas Penumpang :</label>
      <input
        type="number"
        name="kapasitas_penumpang"
        value="{{ $mobil->kapasitas_penumpang }}"
      >
    </div>

    <div class="form-group">
      <label>Jenis :</label>
      <input
        type="text"
        name="jenis"
        value="{{ $mobil->jenis }}"
      >
    </div>

    <div class="form-group">
      <label>Kapasitas Mesin :</label>
      <input
        type="number"
        name="kapasitas_mesin"
        value="{{ $mobil->kapasitas_mesin }}"
      >
    </div>

    <div class="form-group">
      <label>Warna :</label>
      <input
        type="text"
        name="warna"
        value="{{ $mobil->warna }}"
      >
    </div>

    <div class="form-group">
      <label>Gambar :</label>
      <input
        type="file"
        name="gambar"
      >
    </div>

    <div class="btn-area">
      <button type="submit">Update</button>
    </div>

</form>

</div>

</body>
</html>