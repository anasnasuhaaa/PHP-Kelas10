<?php

echo "Pilih Operasi yang ingin dilakukan" . PHP_EOL;
echo "1. Penjumlahan\n" . "2. Pengurangan\n" . "3. Perkalian\n" . "4. Pembagian" . PHP_EOL . PHP_EOL;

function calculate($pilih, $bil1, $bil2)
{
    $total = 0;
    switch ($pilih) {
        case 1:
            $total = $bil1 + $bil2;
            echo "Hasil dari $bil1 + $bil2 = $total" . PHP_EOL;
            break;
        case 2:
            $total = $bil1 - $bil2;
            echo "Hasil dari $bil1 - $bil2 = $total" . PHP_EOL;
            break;
        case 3:
            $total = $bil1 * $bil2;
            echo "Hasil dari $bil1 x $bil2 = $total" . PHP_EOL;
            break;
        case 4:
            $total = $bil1 / $bil2;
            echo "Hasil dari $bil1 : $bil2 = $total" . PHP_EOL;
            break;
        default:
            echo "Tidak ada Pilihan";
            break;
    }
}

$input = readline("Pilih Operasi: ");
$input2 = readline("Bilangan Pertama: ");
$input3 = readline("Bilangan Kedua: ");


calculate($input, $input2, $input3);