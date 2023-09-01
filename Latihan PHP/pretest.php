<?php
$keranjangahmad = [
    "Alat Jaringan" => ["Kabel" => 50000, "Ap" => 60000, "Konektor RJ45" => 10000],
    "Perlengkapan Komputer" => ["Monitor" => 100000, "Motherboard" => 60000, "Heatsink" => 25000]
];

// echo $keranjangahmad["Perlengkapan Komputer"]["Monitor"];
$keranjangahmad["Alat Jaringan"]["Hub"] = 50000;
$keranjangahmad["Alat Jaringan"]["Mikrotik"] = 50000;

$keranjangahmad["Tools"] = ['Kabel Tester' => 25000, 'Tang Crimping' => 25000, 'Obeng' => 25000];

$totalbarang = count($keranjangahmad["Alat Jaringan"]) +
               count($keranjangahmad["Perlengkapan Komputer"]) +
               count($keranjangahmad["Tools"]);

// echo $totalbarang;
$a = $keranjangahmad["Alat Jaringan"]['Kabel'];
$b = $keranjangahmad["Alat Jaringan"]['Ap'];
$c = $keranjangahmad["Alat Jaringan"]['Konektor RJ45'];
$d = $keranjangahmad["Alat Jaringan"]['Hub'];
$e = $keranjangahmad["Alat Jaringan"]['Mikrotik'];

$f = $keranjangahmad["Perlengkapan Komputer"]["Monitor"];
$g = $keranjangahmad["Perlengkapan Komputer"]["Motherboard"];
$h = $keranjangahmad["Perlengkapan Komputer"]["Heatsink"];

$i = $keranjangahmad["Tools"]["Kabel Tester"];
$j = $keranjangahmad["Tools"]["Tang Crimping"];
$k = $keranjangahmad["Tools"]["Obeng"];

$hargabarang = $a + $b + $c + $d + $e + $f + $g + $h + $i + $j + $k;
// echo $hargabarang;

$kurang = $hargabarang - 400000;
echo "Kurangnya adalah $kurang";


