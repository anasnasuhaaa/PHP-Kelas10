<?php
$menu = ["Adiddas", "Nike", "Puma"];
$price = [700000, 750000, 690000];

echo "\n";
echo "Welcome To Our Store" . PHP_EOL;
echo "Pilih Sepatu" . PHP_EOL;
echo "\n";
echo "------ Pilihan Sepatu Terbaik ------" . PHP_EOL;
echo "1. Adiddas\n" . "2. Nike\n" . "3. Puma\n";
echo "--------------------------\n";
echo "Akhiri Pesanan dengan Menulis 'Selesai'" . PHP_EOL.PHP_EOL;

$counter = true;

while ($counter == true) {
    $input = readline("Pilih Yang Mana :  ");
    if ($input == "Selesai") {
            $counter = false;
           
    } elseif ($input >= 1 and $input <= 3) {
        echo $menu[$input - 1] . " Dengan Harga " . $price[$input - 1] . PHP_EOL;
    } else {
        echo "Tidak ada pilihan" . PHP_EOL;
    }
}
