<?php
// KUIS 7   
/* Buatlah sebuah percabangan untuk menentukan bilangan ganjil dan genap
contoh output :
10 adalah bilangan genap 
*/

// $bilangan = 3;

// if ($bilangan % 2) {
//     echo $bilangan;
//     echo ' adalah bilangan ganjil';
// } else {
//     echo $bilangan;
//     echo ' adalah bilangan genap';
// }

// KUIS 9
// $angka = 1;

// switch ($angka) {
//     case 1:
//         echo 'Satu';
//         break;
//     case 2:
//         echo 'Dua';
//         break;
//     case 3:
//         echo 'Tiga';
//         break;
//     case 4:
//         echo 'Empat';
//         break;
//     case 5:
//         echo 'Lima';
//         break;
//     case 6:
//         echo 'Enam';
//         break;
//     case 7:
//         echo 'Tujuh';
//         break;
//     case 8:
//         echo 'Delapan';
//         break;
//     case 9:
//         echo 'Semblan';
//         break;
//     case 10:
//         echo 'Sepuluh';
//         break;
//     default:
//         echo 'tidak ditemukan';
// }

// KUIS 10
// $username = "Diandra";
// $password = "D14ndr4";

// if ($username == "Diandra" and $password == "D14ndr4") {
//     echo 'masuk';
// } else {
//     echo 'tidak bisa masuk';
// }

// $x = 1;

// switch ($x) {
//     case 1:
//         echo 'senin';
//         break;
//     case 2:
//         echo 'selasa';
//         break;
//     case 3:
//         echo 'rabu';
//         break;
//     case 4:
//         echo 'kamis';
//         break;
//     case 5:
//         echo 'jumat';
//         break;
//     case 6:
//         echo 'sabtu';
//         break;
//     case 1:
//         echo 'minggu';
//         break;
//     default:
//         echo 'tidak ditemukan';
// }

// KUIS 12
$us= "Haith";
$ps = "H4f1th";

if($us == "Hafith" and $ps == "H4f1th"){
    echo'Selamat datang hafith';
}elseif($us == "Hafith" and $ps != "H4f1th"){
    echo 'Password anda salah';
}else{
    echo'anda tidak terdaftar';
}

$age = 10;

if ($age >= 10) {
    echo 'Boneka';
} elseif ($age >= 16) {
    echo 'Laptop';
} elseif ($age >= 21) {
    echo 'Perabotan Rumah';
} elseif ($age >= 26 and $age <= 30) {
    echo 'Mobil';
} else {
    echo 'Tidak Membawa hadiah';
}

if ($age % 2) {
    echo ' dan Iphone';
} else {
    echo ' dan Android';
}
