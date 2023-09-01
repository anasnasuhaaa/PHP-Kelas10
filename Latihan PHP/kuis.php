<?php
$keranjang = ["Buah"=> ['Apel', 'semangka', 'angur'],
            "Minuman"=> ['soda', 'kopi', 'sirup'],
            "Pakaian"=> ['celana panjang', 'kaos', 'seragam',],

];

$keranjang["Buah"][]= 'pepaya';
$keranjang["Minuman"][]= 'sisri';

// var_dump($keranjang);
// var_dump($keranjang["Buah"]);
// var_dump($keranjang["Minuman"]);

$keranjang['Perlengkapan Sekolah'] = ['Pensil', 'penghapus', 'buku'];
unset ($keranjang['Minuman'][2]);
// var_dump($keranjang);

$keranjang["Perlengkapan Sekolah"][2] = 'penggaris';
// var_dump($keranjang);
// echo count($keranjang["Buah"]);

$total = count ($keranjang["Buah"]) + 
         count ($keranjang["Minuman"]) + 
         count ($keranjang["Pakaian"]) + 
         count ($keranjang["Perlengkapan Sekolah"]);
// echo $total;#

$keranjang['Alamat'] = ["Kecamatan"=> 'Ciampea', "Kabupaten"=> 'Bogor', "Provrinsi"=> 'Jawa Barat'];

$keranjang['Alamat'][]= ['Desa'=> 'Cicadas'];
var_dump($keranjang);