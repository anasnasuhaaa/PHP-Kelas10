<?php
for ($s = 11; $s <= 20; $s += 2) {
    echo "bilangan ganjil ke $s " . PHP_EOL;
}


$hari = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "minggu"];

for ($x = 0; $x <= 6; $x++) {
    echo "hari ini hari $hari[$x]" . PHP_EOL;
}

for ($s = 11; $s <= 20; $s++) {
    if ($s % 2 == 0) {
        echo "Bilangan Genap ke $s" . PHP_EOL;
    } 
}


for ($a = 1; $a <= 5; $a++) {
    echo "*****".PHP_EOL;
}

$database = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
for ($a = 1; $a <= 19; $a += 2) {
    echo "BILANGAN GENAP KE $database[$a] " . PHP_EOL;
}

$jumlah=0;
for ($y = 1; $y <= 10; $y++) {
    echo "bilangan ke $y" . PHP_EOL;
    $penampung = $jumlah += $y;
    echo $penampung;
}