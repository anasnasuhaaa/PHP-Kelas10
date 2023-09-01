<?php

/* 1. Buatlah program untuk mengerahui nilai yang didapatkan oleh siswa 
- Nilai Antara 91-100 = A
- Nilai Antara 81-90 = B
- Nilai Antara 61-80 = C
- Nilai Antara 41-60 = D
- Nilai Antara 0-40 = E
*/

$nilai = 80;

if($nilai >= 91){
    echo 'A';
}elseif($nilai >= 81){
    echo 'B';
}elseif($nilai >= 61){
    echo 'C';
}elseif($nilai >= 41){
    echo 'D';
}else{
    echo 'E';
}

$usia = 34;

if($usia < 5 ){
    echo 'Balita';
}elseif($usia <11){
    echo 'Kanak-Kanak';
}elseif($usia <25){
    echo 'Remaja';
}elseif($usia <35){
    echo 'Dewasa';
}else{
    echo 'Tua';
}