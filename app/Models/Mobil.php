<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Warna;

class Mobil extends Model
{
    protected $fillable = [
        'nama_mobil',
        'tipe_mobil',
        'harga',
        'jenis',
        'bahan_bakar',
        'transmisi',
        'kapasitas_penumpang',
        'kapasitas_mesin',
        'gambar'
    ];

    public function warnas()
    {
        return $this->belongsToMany(
            Warna::class,
            'mobil_warna',
            'mobil_id',
            'warna_id'
        );
    }
}