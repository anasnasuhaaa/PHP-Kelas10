<?php
// for ($a = 25; $a <= 60; $a++) {
//     echo "angka $a" . PHP_EOL;
// }
// echo "\n";
// for ($a = 12; $a >= 1; $a--) {
//     echo "angka $a" . PHP_EOL;
// }

// $hari = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'];

// for ($i = 0; $i <= 6; $i++) {
//     echo "hari ini hari $hari[$i]" . PHP_EOL;
// }

// for ($a = 2; $a <= 10; $a += 2) {
//     echo "angka $a" . PHP_EOL;
// }

// for ($a = 11; $a <= 20; $a += 2) {
//     echo "angka $a" . PHP_EOL;
// }

// for ($x = 1; $x <= 5; $x++) {
//     echo "*****" . PHP_EOL;
// }

// $database = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
// for($y=2; $y<=19;$y++ ){
//     echo"bilangan genap ke $database[$y]".PHP_EOL;
// }




for ($q = 1; $q <= 7; $q++) {
    for ($w = 1; $w <= $q; $w++) {
        echo 'X';
    }
    echo "\n";
}

for ($r = 1; $r <= 20; $r++) {
    if ($r % 2 == 0) {
        echo $r . PHP_EOL;
    } else {

    }

}

echo "\n";
$sum = 0;
for ($o = 1; $o <= 10; $o++) {
    echo $o . PHP_EOL;
    echo $sum += $o;
}


echo "\n";
for($x=10; $x>=1; $x--){
    for($p=1; $p>=$x; $p--){
        echo'*';
    }
    echo "\n";
}

