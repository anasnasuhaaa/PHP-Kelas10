<?php
$siswabazma = ["Hanif", "Raka", "Rofi", "Mufiz", "Rifai"];
$uang = [55000, 25000, 40000, 100000, 10000];

$total = 0;
for ($x = 0; $x <= 4; $x++) {
    $total = $total + $uang[$x];
}
echo "Total uang mereka adalah $total";