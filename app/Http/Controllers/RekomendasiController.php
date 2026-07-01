<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;


class RekomendasiController extends Controller
{
    public function hitung(Request $request)
    {
        // INPUT USER

        $harga = $request->harga;

$kapasitasMesin = $request->kapasitas_mesin;

$penumpang = $request->kapasitas_penumpang;

$transmisi = $request->transmisi;

$tipe = $request->tipe;

$bahanBakar = $request->bahan_bakar;

$warna = $request->warna;
$userWarna = 1;


        // AMBIL DATA MOBIL
        $mobils = Mobil::with('warnas')->get();
 
        // MIN MAX DATABASE
        $minHarga = $mobils->min('harga');
        $maxHarga = $mobils->max('harga');

        $minMesin = $mobils->min('kapasitas_mesin');
        $maxMesin = $mobils->max('kapasitas_mesin');

        $minPenumpang = $mobils->min('kapasitas_penumpang');
        $maxPenumpang = $mobils->max('kapasitas_penumpang');

        // NORMALISASI USER
        $userHarga =
            ($harga - $minHarga)
            /
            ($maxHarga - $minHarga);

        $userMesin =
            ($kapasitasMesin - $minMesin)
            /
            ($maxMesin - $minMesin);

        $userPenumpang =
    ($penumpang - $minPenumpang)
    /
    ($maxPenumpang - $minPenumpang);


        // ONE HOT ENCODING
        $userManual =
            strtolower($transmisi) == 'manual'
            ? 1 : 0;

        $userAutomatic =
            strtolower($transmisi) == 'automatic'
            ? 1 : 0;

        $userCVT =
            strtolower($transmisi) == 'cvt'
            ? 1 : 0;

// BAHAN BAKAR USER
$userBensin =
    strtolower($bahanBakar) == 'bensin'
    ? 1 : 0;

$userDiesel =
    strtolower($bahanBakar) == 'diesel'
    ? 1 : 0;


// JENIS USER

$userMPV =
    strtolower($tipe) == 'mpv'
    ? 1 : 0;

$userCrossover =
    strtolower($tipe) == 'crossover'
    ? 1 : 0;

$userSUV =
    strtolower($tipe) == 'suv'
    ? 1 : 0;

$userPickup =
    strtolower($tipe) == 'pick up'
    ? 1 : 0;


        // VEKTOR USER
      $vektorUser = [

    round($userHarga, 3),

    round($userMesin, 3),

    round($userPenumpang, 3),

    $userManual,

    $userAutomatic,

    $userCVT,

    $userBensin,

    $userDiesel,

    $userMPV,

    $userCrossover,

    $userSUV,

    $userPickup,

    $userWarna,
];

        $hasil = [];
        foreach ($mobils as $mobil) {
            $normalHarga =
    ($mobil->harga - $minHarga)
    /
    ($maxHarga - $minHarga);
    $normalMesin =
    ($mobil->kapasitas_mesin - $minMesin)
    /
    ($maxMesin - $minMesin);
    $normalPenumpang =
    ($mobil->kapasitas_penumpang - $minPenumpang)
    /
    ($maxPenumpang - $minPenumpang);
    $mobilManual =
    strtolower($mobil->transmisi) == 'manual'
    ? 1 : 0;
    $mobilWarnaMatch = $mobil->warnas->contains('id', $warna) ? 1 : 0;

// BAHAN BAKAR
$mobilBensin =
    strtolower($mobil->bahan_bakar) == 'bensin'
    ? 1 : 0;

$mobilDiesel =
    strtolower($mobil->bahan_bakar) == 'diesel'
    ? 1 : 0;

// JENIS MOBIL
$mobilMPV =
    strtolower($mobil->jenis) == 'mpv'
    ? 1 : 0;

$mobilCrossover =
    strtolower($mobil->jenis) == 'crossover'
    ? 1 : 0;

$mobilSUV =
    strtolower($mobil->jenis) == 'suv'
    ? 1 : 0;

$mobilPickup =
    strtolower($mobil->jenis) == 'pick up'
    ? 1 : 0;

$mobilAutomatic =
    strtolower($mobil->transmisi) == 'automatic'
    ? 1 : 0;

$mobilCVT =
    strtolower($mobil->transmisi) == 'cvt'
    ? 1 : 0;

    $vektorMobil = [
    round($normalHarga, 3),
    round($normalMesin, 3),
    round($normalPenumpang, 3),

    $mobilManual,
    $mobilAutomatic,
    $mobilCVT,

    $mobilBensin,
    $mobilDiesel,

    $mobilMPV,
    $mobilCrossover,
    $mobilSUV,
    $mobilPickup,

    $mobilWarnaMatch
];

$dotProduct = 0;
    for ($i = 0; $i < count($vektorUser); $i++) {

        $dotProduct +=
            $vektorUser[$i]
            *
            $vektorMobil[$i];
    }

$panjangUser = sqrt(

    array_sum(

        array_map(function ($nilai) {

            return pow($nilai, 2);

        }, $vektorUser)
    )
);
$panjangMobil = sqrt(

    array_sum(

        array_map(function ($nilai) {

            return pow($nilai, 2);

        }, $vektorMobil)
    )
);

if (
    $panjangUser == 0 ||
    $panjangMobil == 0
) {

    $similarity = 0;

} else {

    $similarity =
        $dotProduct
        /
        (
            $panjangUser
            *
            $panjangMobil
        );
}
$hasil[] = [

    'nama_mobil' => $mobil->nama_mobil,

    'tipe_mobil' => $mobil->tipe_mobil,

    'similarity' => round($similarity, 3),

    'harga' => $mobil->harga,

    'transmisi' => $mobil->transmisi,

    'bahan_bakar' => $mobil->bahan_bakar,

    'kapasitas_mesin' => $mobil->kapasitas_mesin,

    'kapasitas_penumpang' => $mobil->kapasitas_penumpang,

    'warnas' => $mobil->warnas,

    'gambar' => $mobil->gambar,
];
}
usort($hasil, function ($a, $b) {

    return $b['similarity']
        <=>
        $a['similarity'];
});
$hasil = array_filter(
    $hasil,
    function ($item) {

        return $item['similarity'] >= 0.6;
    }
);

// dd(array_slice($hasil, 0, 5));
return view(
    'detailrekomendasi',
    [
        'hasil' => $hasil,
        'warnaDipilih' => $warna
    ]
);
}
}