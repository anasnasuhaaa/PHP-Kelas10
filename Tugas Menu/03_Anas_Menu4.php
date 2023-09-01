<?php
$menu = ["Adiddas", "Nike", "Puma"];
$price = [700000, 750000, 690000];

echo "\n";
echo "Welcome To Our Store" . PHP_EOL;
echo "Pilih Sepatu" . PHP_EOL;
echo "\n";
echo "----- Pilihan Sepatu Terbaik -----" . PHP_EOL;
echo "1. Adiddas\n" . "2. Nike\n" . "3. Puma\n";
echo "----------------------\n";
echo "Akhiri Pesanan dengan Menulis 'Selesai'" . PHP_EOL . PHP_EOL;

$counter = true;
$b = 0;
while ($counter == true) {
    $input = readline("Pilih Yang Mana :  ");
    if ($input >= 1 && $input <= 3) {
        echo $menu[$input - 1] . " Dengan Harga " . $price[$input - 1] . PHP_EOL;
        $i[] = $menu[$input - 1];
        $j[] = $price[$input - 1];
        $sum = array_sum($j);
        $b++;
    } elseif ($input == "Selesai") {
        $counter = false;
    } else {
        echo "Tidak ada pilihan" . PHP_EOL;
    }
}
echo "\n";
echo "------------ Invoice -----------" . PHP_EOL;
echo "No" . "\t" . "Nama" . "\t\t" . "Harga" . PHP_EOL;
for ($a = 1; $a <= $b; $a++) {
    echo ($a) . "." . "\t" . ($i[$a - 1]) . "\t\t" . $j[$a - 1] . PHP_EOL;
}
echo "--------------------------------" . PHP_EOL;
echo "Total Harga = $sum";

