<?php
// Anas Nasuha
// X-PPLG
include_once("subtraction.php");
include_once("multiply.php");
include_once("division.php");
include_once("rank.php");

echo "Pilih Operasi yang ingin dilakukan" . PHP_EOL;
echo "1. Penjumlahan\n" . "2. Pengurangan\n" . "3. Perkalian\n" . "4. Pembagian\n" . "5. Perpangkatan" . PHP_EOL . PHP_EOL;

$input = readline("Pilih Operasi: ");

if ($input == 1) {
    // Penjumlahan
    echo additional(readline("Bilangan 1: "), readline("Bilangan 2: "));
} elseif ($input == 2) {
    // Pengurangan
    echo subtraction(readline("Bilangan 1: "), readline("Bilangan 2: "));
} elseif ($input == 3) {
    // Perkalian
    echo multiply(readline("Bilangan 1: "), readline("Bilangan 2: "));
} elseif ($input == 4) {
    // Pembagian
    echo division(readline("Bilangan 1: "), readline("Bilangan 2: "));
} elseif ($input == 5) {
    //Perpangkatan
    echo rank(readline("Bilangan 1: "), readline("Bilangan 2: "));
} else {
    echo "404 NOT FOUND";
}