@extends('admin')

@section('title', 'Daftar Mobil')

@section('content')
<div class="container">

  <!-- HEADER -->
  <div class="top-bar">
    

    <div class="action-buttons">

        <form action="{{ route('mobil.import') }}"
              method="POST"
              enctype="multipart/form-data"
              class="import-form">

            @csrf

            <label for="file_excel" class="file-label">
                📄 Pilih Excel
            </label>

            <input
                type="file"
                id="file_excel"
                name="file_excel"
                required>

            <button type="submit" class="btn-import">
                ⬆ Import Excel
            </button>

        </form>

        <a href="{{ url('/tambahmobil') }}" class="btn-add">
            + Tambah Mobil
        </a>

    </div>
</div>

  <!-- TABLE -->
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Mobil</th>
        <th>Jenis</th>
        <th>Tipe</th>
        <th>Kapasitas Mesin</th>
        <th>Bahan Bakar</th>
        <th>Transmisi</th>
        <th>Warna</th>
        <th>Kapasitas Penumpang</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>

@foreach($mobils as $mobil)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $mobil->nama_mobil }}</td>
    <td>{{ $mobil->jenis }}</td>
    <td>{{ $mobil->tipe_mobil }}</td>
    <td>{{ $mobil->kapasitas_mesin }}</td>
    <td>{{ $mobil->bahan_bakar }}</td>
    <td>{{ $mobil->transmisi }}</td>
    <td>{{ $mobil->warna }}</td>
    <td>{{ $mobil->kapasitas_penumpang }}</td>
    <td>Rp {{ number_format($mobil->harga, 0, ',', '.') }}</td>
    <td>

    <a href="/mobil/{{ $mobil->id }}/edit" class="edit-btn">
    Edit
</a>
    <form
        action="{{ route('mobil.destroy', $mobil->id) }}"
        method="POST"
        style="display:inline;"
    >
        @csrf
        @method('DELETE')

        <button
    type="submit"
    class="delete-btn"
    onclick="return confirm('Yakin hapus?')"
>
    Hapus
</button>
    </form>

</td>
</tr>
@endforeach

</tbody>
  </table>

</div>

<script>
let no = 1;

function toggleForm() {
  const form = document.getElementById("formBox");
  form.style.display = form.style.display === "block" ? "none" : "block";
}

function tambahData() {
  const nama = document.getElementById("nama").value;
  const jenis = document.getElementById("jenis").value;
  const tipe = document.getElementById("tipe").value;
  const mesin = document.getElementById("mesin").value;
  const bbm = document.getElementById("bbm").value;
  const transmisi = document.getElementById("transmisi").value;
  const warna = document.getElementById("warna").value;
  const penumpang = document.getElementById("penumpang").value;
  const harga = document.getElementById("harga").value;

  const table = document.getElementById("tableBody");

  const row = `
    <tr>
      <td>${no++}</td>
      <td>${nama}</td>
      <td>${jenis}</td>
      <td>${tipe}</td>
      <td>${mesin}</td>
      <td>${bbm}</td>
      <td>${transmisi}</td>
      <td>${warna}</td>
      <td>${penumpang}</td>
      <td>${harga}</td>
      <td>
        <button class="edit">✏️</button>
        <button class="delete" onclick="hapusRow(this)">🗑</button>
      </td>
    </tr>
  `;

  table.innerHTML += row;
}

function hapusRow(btn) {
  btn.parentElement.parentElement.remove();
}
</script>
</div>
@endsection