<?php

echo "Pilih Operasi yang ingin dilakukan" . PHP_EOL;
echo "1. Penjumlahan\n" . "2. Pengurangan\n" . "3. Perkalian\n" . "4. Pembagian\n" . "5. Perpangkatan" . PHP_EOL . PHP_EOL;

function calculate($pilih)
{
    
    if ($pilih >= 1 and $pilih <= 5) {

        $bil1 = readline("Bilangan Pertama: ");
        $bil2 = readline("Bilangan Kedua: ");

            if ($pilih == 1) {
                $total = $bil1 + $bil2;
                echo "Hasil dari $bil1 + $bil2 = $total" . PHP_EOL;
            } elseif ($pilih == 2) {
                $total = $bil1 - $bil2;
                echo "Hasil dari $bil1 - $bil2 = $total" . PHP_EOL;
            } elseif ($pilih == 3) {
                $total = $bil1 * $bil2;
                echo "Hasil dari $bil1 x $bil2 = $total" . PHP_EOL;
            } elseif ($pilih == 4) {
                $total = $bil1 / $bil2;
                echo "Hasil dari $bil1 : $bil2 = $total" . PHP_EOL;
            } elseif ($pilih == 5) {
                $total = $bil1 ** $bil2;
                echo "Hasil dari $bil1 ^ $bil2 = $total" . PHP_EOL;
            }
        
    } else {
        echo "Pilihan Tidak Valid";
    }

}
$input = readline("Pilih Operasi: ");


calculate($input);