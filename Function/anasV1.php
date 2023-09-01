<?php

echo "Pilih Operasi yang ingin dilakukan" . PHP_EOL;
echo "1. Penjumlahan\n" . "2. Pengurangan\n" . "3. Perkalian\n" . "4. Pembagian\n" . "5. Perpangkatan" . PHP_EOL . PHP_EOL;
echo "Akhiri dengan menulis 'Selesai" . PHP_EOL;
function calculate()
{
    $total = 0;

    $input = readline("Masukan Nomor Operasi Pilihan: ");
    if ($input >= 1 and $input <= 5) {
        $bil1 = readline("Masukan Bilangan Pertama: ");
        $bil2 = readline("Masukan Bilangan Kedua: ");
        if ($input == 1) {
            $total = $bil1 + $bil2;
            echo "Hasil dari $bil1 + $bil2 = $total" . PHP_EOL . PHP_EOL;
        } elseif ($input == 2) {
            $total = $bil1 - $bil2;
            echo "Hasil dari $bil1 - $bil2 = $total" . PHP_EOL . PHP_EOL;
        } elseif ($input == 3) {
            $total = $bil1 * $bil2;
            echo "Hasil dari $bil1 x $bil2 = $total" . PHP_EOL . PHP_EOL;
        } elseif ($input == 4) {
            $total = $bil1 / $bil2;
            echo "Hasil dari $bil1 : $bil2 = $total" . PHP_EOL . PHP_EOL;
        } elseif ($input == 5) {
            $total = $bil1 ** $bil2;
            echo "Hasil dari $bil1 ^ $bil2 = $total" . PHP_EOL . PHP_EOL;
        }

    } else {
        echo "Pilihan tidak Valid";
    }
}

calculate();