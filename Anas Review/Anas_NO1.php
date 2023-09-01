<?php
$age = 25;
if ($age >= 10 and $age <= 15) {
    echo "Dapet Boneka";
} elseif ($age >= 16 and $age <= 20) {
    echo "Dapet Laptop";
} elseif ($age >= 21 and $age <= 25) {
    echo "Dapet Perabotan Rumah";
} elseif ($age >= 26 and $age <= 30) {
    echo "Dapet Mobil";
} else {
    "Di luar Kriteria";
}
if ($age % 2 == 1) {
    echo " Bonus dapet iPhone";
} else {
    echo " Bonus dapet Android";
}