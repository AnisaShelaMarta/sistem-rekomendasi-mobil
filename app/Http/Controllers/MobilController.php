<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MobilImport;


class MobilController extends Controller
{
   public function store(Request $request)
{
    $gambar = null;

    if ($request->hasFile('gambar')) {

        $gambar = $request->file('gambar')
            ->store('mobil', 'public');
    }

    Mobil::create([
        'nama_mobil' => $request->nama_mobil,
        'tipe_mobil' => $request->tipe_mobil,
        'harga' => $request->harga,
        'jenis' => $request->jenis,
        'warna' => $request->warna,
        'bahan_bakar' => $request->bahan_bakar,
        'transmisi' => $request->transmisi,
        'kapasitas_penumpang' => $request->kapasitas_penumpang,
        'kapasitas_mesin' => $request->kapasitas_mesin,
    ]);

    return redirect('/daftarmobil');
}
public function destroy($id)
{
    $mobil = Mobil::findOrFail($id);

    $mobil->delete();

    return redirect('/daftarmobil');
}
public function edit($id)
{
    $mobil = Mobil::findOrFail($id);

    return view('editmobil', compact('mobil'));
}
public function update(Request $request, $id)
{
    $mobil = Mobil::findOrFail($id);

    $mobil->update([
        'nama_mobil' => $request->nama_mobil,
        'bahan_bakar' => $request->bahan_bakar,
        'tipe_mobil' => $request->tipe_mobil,
        'transmisi' => $request->transmisi,
        'harga' => $request->harga,
        'kapasitas_penumpang' => $request->kapasitas_penumpang,
        'jenis' => $request->jenis,
        'kapasitas_mesin' => $request->kapasitas_mesin,
        'warna' => $request->warna,
    ]);

    return redirect('/daftarmobil');
}
public function import(Request $request)
{
    Excel::import(
        new MobilImport,
        $request->file('file_excel')
    );

    return redirect('/daftarmobil');
}
}