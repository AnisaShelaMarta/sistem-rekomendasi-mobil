<?php

namespace App\Imports;

use App\Models\Mobil;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MobilImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        if (empty($row['nama_mobil'])) {
            return null;
        }

        return new Mobil([
            'nama_mobil' => $row['nama_mobil'],
            'tipe_mobil' => $row['tipe_mobil'],
            'harga' => $row['harga'],
            'jenis' => $row['jenis'],
            'warna' => $row['warna'],
            'bahan_bakar' => $row['bahan_bakar'],
            'transmisi' => $row['transmisi'],
            'kapasitas_penumpang' => $row['kapasitas_penumpang'],
            'kapasitas_mesin' => $row['kapasitas_mesin'],
        ]);
    }
}