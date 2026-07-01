<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warna extends Model
{
    protected $table = 'warna';

    protected $fillable = [
        'nama_warna',
        'kode_hex'
    ];

    public function mobils()
    {
        return $this->belongsToMany(
            Mobil::class,
            'mobil_warna',
            'warna_id',
            'mobil_id'
        );
    }
}