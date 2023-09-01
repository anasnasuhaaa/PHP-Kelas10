<?php
for ($x = 1; $x <= 10; $x++) {
    for ($y = 1; $y <= $x; $y++) {
        echo " ";
    }
    for ($y = $x; $y <= 10; $y++) {
        echo "*";
    }
    echo "\n";
}