<?php

$nilai = "B";

switch ($nilai) {
    case "A":
        echo 'anda lulus';
        break;
    case "B":
    case "C":
        echo 'Anda mengulang pelajaran PHP';
        break;
    default:
        echo 'PULANG SAJA';
}
echo"\n";

switch ($nilai) {
    case "A":
        echo 'ANDA LULUS BANGET';
        break;
    case "B":
        echo 'Anda harus mengulang pelajaran';
}

$x = 1;
do{
    echo $x;
    echo"\n";
    $x++;
}while($x <= 5);