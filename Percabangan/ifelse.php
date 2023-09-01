<?php
$nilaimtk = 80;
$nilaibsunda = 79;

// nomer2
if ($nilaimtk > 75 && $nilaibsunda > 75) {
    echo 'LULUS'.PHP_EOL; 
}
 else {
    echo 'Tidak Lulus'.PHP_EOL;
}

// nomer 3
if ($nilaimtk > 80 or $nilaibsunda > 80) {
    echo 'LULUS' . PHP_EOL;
} else {
    echo 'Tidak Lulus' . PHP_EOL;
}