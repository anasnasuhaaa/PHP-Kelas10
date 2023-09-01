<?php
// nomer 1
// $buah = "Apel";

// if($buah = "apel"){
//     echo'andra makan';
// }else{
//     echo'andra tidak makan';
// }

// switch($buah){
//     case "apel":
//         echo'andra makan';
//         break;
//         default:
//         echo'tidak makan';
//     }

// nomer 2
// $login = "Ahmad";

// switch($login){
//     case "Ahmad":
//         echo'masuk';
//         break;
//     default:
//     echo'tidak dapat masuk';
// }

// nomer 3
// $usia = 17;

// if($usia = 17){
//     echo 'masuk';
// }else{
//     echo'tidak masuk';
// }

// nomer 4
// $bilangan = 20;

// if($bilangan % 2 ){
//     echo $bilangan; echo' adalah bilangan ganjil';
// }else{
//     echo $bilangan; echo' adalah bilangan genap';
// }


// nomer 5
// $a = 1;
// $b = 3;
// $c = $a + $b;

// if($c % 2){
//     echo $c; echo ' adalah bilangan ganjil';
// }else{
//    echo $c; echo' adalah bilangan genap';
// }


// nomer 6
/* Butlah program untuk mengetahui kategori nilai yang didapatkan oleh siswa
    - Nilai antara 91-100 = S+
    - Nilai antara 81-90 = S
    - Nilai antara 61-80 = A+
    - Diluat bilei tersebut tidak naik kelas  */

// $nilai = 60;

// if($nilai >100 ){
//     echo'tidak ditemukan';
// }
// elseif($nilai >= 91){
//     echo'S+';
// }elseif($nilai >= 81){
//     echo 'S';
// }elseif($nilai >= 61){
//     echo'A+';
// }else {
//     echo'TIDAK NAIK KELAS';
// }

// nomer 8
/* Sarat kenaikan kelas ialah pelajaran MTK dan Progdas diatas 80, 
    jika salah satu nilai di bawah 80 maka tidak naik kelas */
$mtk = 80;
$progdas = 9;

if ($mtk > 80 or $progdas > 80) {
    echo 'naik kelas';
} else {
    echo ' tidak naik kelas';
}

// nomer 9
/* Buatlah program pemanggilan bilanga dari 1-10
    EX.
    - Jika nilai variable 1 maka output "satu"
    - Jika nilai variable 5 maka output "lima"
    */
$nilai1 = 1;

switch ($nilai1) {
    case 1:
        echo 'Satu';
        break;
    case 2:
        echo 'dua';
        break;
    case 3:
        echo 'tiga';
        break;
    case 4:
        echo 'empat';
        break;
    case 5:
        echo 'lima';
        break;
    case 6:
        echo 'enam';
        break;
    case 7:
        echo 'tujuh';
        break;
    case 8:
        echo 'delapan';
        break;
    case 9:
        echo 'sembilan';
        break;
    case 10:
        echo 'sepuluh';
        break;
    default:
        echo 'tidak ditemukan';
}