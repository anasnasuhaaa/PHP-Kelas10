<?php
for ($p = 2; $p <= 100; $p+=2) {
    if ($p % 10 == 0) {
        echo "$p ini bilangan ke $p" . PHP_EOL;
    } elseif ($p % 7 == 0) {

    } else {
        echo $p . PHP_EOL;
    }
}