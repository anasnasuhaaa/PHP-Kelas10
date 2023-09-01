<?php

echo "Perpustakaan Pribadi" . PHP_EOL;
echo "1. Tambah Buku \n" . "2. Hapus Buku \n" . "3. Keluar \n";
$counter = true;
$x = 0;
while ($counter = true) {

    $input = readline("Pilih : ");

    if ($input == 1) {
        echo "Menambah Buku\n";
        $tambah = readline("Masukan Buku (X untuk keluar): ");
        $buku[] = $tambah;
        $x++;

    } elseif ($input == 2) {
        echo "Mengahapus Buku\n";
        $hapus = readline("Hapus Buku (X untuk keluar): ");
        echo "Sukses Menghapus Buku $hapus\n";
        unset($buku[$hapus - 1]);
        $buku = array_values($buku);
        $x--;


    } elseif ($input == 'x' or $input == 'X') {
        $counter = false;
    }
    for ($i = 1; $i <= $x; $i++) {
        echo "$i. " . ($buku[$i - 1]) . PHP_EOL;
    }


    // foreach ($buku as $key => $value) {
    //     echo "$key. $value" . PHP_EOL;
    // }
}