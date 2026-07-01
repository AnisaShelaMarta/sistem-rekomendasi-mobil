<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Mobil</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/formpelanggan.css') }}">
</head>
<body>

<div class="container">
    <div class="card">

        <img src="{{ asset('image/logo.png') }}" alt="logo">

        <h2>Let me know what you want!</h2>

        <p>
            Select the model that perfectly fits your lifestyle and driving needs
        </p>

        <form
class="form-grid"
action="{{ route('rekomendasi.hitung') }}"
method="POST">

            @csrf

            <div class="form-group">
                <label>Tipe :</label>
                <select name="tipe">
                    <option value="SUV">SUV</option>
                    <option value="MPV">MPV</option>
                    <option value="Pickup">Pickup</option>
                </select>
            </div>

            <div class="form-group">
                <label>Transmisi :</label>
                <select name="transmisi">
                    <option value="Manual">Manual</option>
                    <option value="Automatic">Automatic</option>
                    <option value="CVT">CVT</option>
                </select>
            </div>

            <div class="form-group">
    <label>Bahan Bakar :</label>
    <select name="bahan_bakar">
        <option value="Diesel">Diesel</option>
        <option value="Bensin">Bensin</option>
    </select>
</div>

<div class="form-group">
    <label>Kapasitas Penumpang :</label>
    <input type="number" name="kapasitas_penumpang">
</div>

<div class="form-group">
    <label>Harga Maksimal :</label>
    <input type="number" name="harga">
</div>

<div class="form-group">
    <label>Kapasitas Mesin :</label>
    <input type="number" name="kapasitas_mesin">
</div>

<div class="form-group">
    <label>Warna :</label>

    <select name="warna">

        @foreach($warna as $item)

            <option value="{{ $item->id }}">

                @if($item->kode_hex == '#000000')
                    ⚫
                @elseif($item->kode_hex == '#FFFFFF')
                    ⚪
                @elseif($item->kode_hex == '#C62828')
                    🔴
                @elseif($item->kode_hex == '#FDD835')
                    🟡
                @elseif($item->kode_hex == '#6D7B52')
                    🟢
                @elseif($item->kode_hex == '#5F6368')
                    ⚫
                @else
                    🟤
                @endif

                {{ $item->nama_warna }}

            </option>

        @endforeach

    </select>
</div>
            <button type="submit" class="btn">
                Next
            </button>

        </form>

    </div>
</div>
</body>
</html>