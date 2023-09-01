<?php
// for($a=1; $a<=5; $a++){
//     for($b=1; $b<=5; $b++){
//         echo "$a$b ";
//     }
//     echo"\n";
// }

for ($c = 1; $c <= 6; $c++) {
    for ($d = 1; $d <= $c; $d++) {
        echo "* ";
    }
    echo "\n";
}

$ketetapan = 6;
for ($rows = 1; $rows <= $ketetapan; $rows++) {
    for ($coloumb = 1; $coloumb <= $ketetapan - $rows; $coloumb++) {
        echo "* ";
    }
    echo "\n";
}

for ($e = 6; $e >= 1; $e--) {
    for ($f = 1; $f <= $e; $f++) {
        echo "*";
    }
    echo "\n";
}

for ($rows = 1; $rows <= $ketetapan; $rows++) {
    for ($coloumb = 1; $coloumb <= $ketetapan - $rows + 1; $coloumb++) {
        echo " ";
    }
    for ($coloumb = 1; $coloumb <= $rows; $coloumb++) {
        echo '*';
    }
    echo "\n";
}

$input = 5;
for ($f = 1; $f <= $input; $f++) {
    for ($as = 1; $as <= $f; $as++) {
        echo " ";
    }
    for ($as = $f; $as <= 5; $as++) {
        echo "*";
    }
    echo "\n";
}
