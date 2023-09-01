<?php

// $nilaimtk = 80;
// $nilaibsunda = 79;

// if($nilaimtk > 75 and $nilaibsunda > 75){
//     echo'Lulus';
// }else{
//     echo 'tidak lulus';
// }
// if($nilaimtk > 80 or $nilaibsunda > 80){
//     echo 'lulus';
// }else{
//     echo 'tidak lulus';
// }

$nilai = 60;

if ($nilai >= 61) {
    echo 'C';
} elseif ($nilai >= 81) {
    echo 'B';
} elseif ($nilai >= 91) {
    echo 'A';
} elseif ($nilai > 100) {
    echo 'TIDAK DITEMUKAN';
} else {
    echo 'PULANG SAJA';
}

$usia = 3;

if ($usia < 5) {
    echo 'Balita';
} elseif ($usia >= 5) {
    echo 'Kanak-kanak';
} elseif ($usia >= 12) {
    echo 'Remaja';
} elseif ($usia > 25) {
    echo 'dewasa';
} else {
    echo 'sudah tua';
}