<?php
// Mencetak angka 1-20 tanpa angka 5 dan 10
for ($a = 1; $a <= 20; $a++) {
    if ($a != 5 and $a != 10) {
        echo $a . PHP_EOL;
    }
    ;
} echo "\n";

// Mencetak bintang 5 x 5
for ($b = 1; $b <= 5; $b++) {
    for ($t = 1; $t <= 5; $t++) {
        echo '*';
    }
    echo "\n";
}
echo "\n";

for ($y = 0; $y <= 5; $y++) {
    for ($o = 1; $o <= 5; $o++) {
        if($y!=4){
            echo $y;
        }else{

        }
    }
    echo "\n";
}

