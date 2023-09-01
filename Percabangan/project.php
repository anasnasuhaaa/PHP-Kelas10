<?php
for ($a = 1; $a <= 7; $a++) {
    for ($b = 1; $b <= 7 - $a; $b++) {
        echo " ";
    }
    for ($b = 1; $b <= $a; $b++) {
        echo "* ";
    }
    echo "\n";
}
for ($a = 1; $a <= 7; $a++) {
    for ($b = 1; $b <= $a; $b++) {
        echo " ";
    }
    for ($b = $a; $b <= 7; $b++) {
        echo "* ";
    }
    echo "\n";
}

