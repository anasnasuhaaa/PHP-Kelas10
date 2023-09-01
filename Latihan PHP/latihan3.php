<?php
/* 1. Buatlah array dengan format No Absen, Nama, Alamat, Usia
   2. Tambahkan data Sekolah SMK TI BAZMA
   3. Mengapus Data Alamat  */

// Mmebuat data
$identitas = ["No Absen"=> 3, "Nama"=> 'Anas Nasuha', "Alamat"=> 'Indramayu', "Usia"=> 15,];
// Menambahkan Data Sekolah
$identitas["Sekolah"] = 'SMK TI BAZMA';
// Menghapus Alamat
unset ($identitas["Alamat"]);
// Menampilkan Data
var_dump($identitas);
echo count($identitas);