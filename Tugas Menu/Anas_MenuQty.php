<?php
$menu = ["Nasi Kuning", "Nasi Lengko", "Nasi Uduk"];
$price = [12000, 15000, 10000];

echo "\n";
echo "Selamat Datang di Warung Saya" . PHP_EOL;
echo "Pilih Makan" . PHP_EOL;
echo "\n";
echo "----- Menu Makan -----" . PHP_EOL;
echo "1. Nasi Kuning \t Rp12.000\n" . "2. Nasi Lengko \t Rp15.000\n" . "3. Nasi Uduk \t Rp10.000\n";
echo "----------------------\n";
echo "Akhiri Pesanan dengan Menulis 'Selesai'" . PHP_EOL . PHP_EOL;

$counter = true;
$b = 0;
while ($counter == true) {
    $input = readline("Pilih Yang Mana :  ");
    if ($input >= 1 && $input <= 3) {
        echo $menu[$input - 1] . " Dengan Harga " . $price[$input - 1] . PHP_EOL;
        $qty = readline("Berapa :  ");
        $q[] = $qty;
        $i[] = $menu[$input - 1];
        $j[] = $price[$input - 1];
        $jumlahqty[] = $price[$input - 1] * $qty;
        $sumqty = array_sum($jumlahqty);
        $b++;
    } elseif ($input == "Selesai") {
        $counter = false;
    } else {
        echo "Tidak ada pilihan" . PHP_EOL;
    }
}
echo "\n";
echo "------------ Invoice -----------" . PHP_EOL;
echo "No" . "\t" . "" . "\t\t" . "Qty" . "\t" . "Harga" . PHP_EOL;
for ($a = 1; $a <= $b; $a++) {
    echo ($a) . "." . "\t" . $i[$a - 1] . "\t" . $q[$a - 1] . "\t" . number_format($j[$a - 1],0,",",".") . PHP_EOL;
}
echo "--------------------------------" . PHP_EOL;
echo "Total Harga = " . number_format($sumqty,0,",",".");