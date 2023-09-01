<?php


// MEMANGGIL VALUE 
$nilai = array("halo", "di sini", "saya");
var_dump($nilai [1]);
echo $nilai[1];

// MENGGANTI VALUE
$nilai[1] = "kamu";
var_dump($nilai);

// MENAMBAH DATA DI ARRAY
$nilai[] = "asep";
$nilai[] = "faiq";
var_dump($nilai);

// MENGHAPUS DATA DI ARRAY
unset($nilai[4]);
var_dump($nilai);

// MENGHITUNG TOTAL 
echo count($nilai);