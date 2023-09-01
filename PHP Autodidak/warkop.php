<?php
echo "Selamat Datang Di Warkop Om Anas" . PHP_EOL;
echo "----- WARKOP OM ANAS -----" . PHP_EOL;
echo "1. Makanan \n" . "2. Minuman \n" . "3. Rokok \n";

$input = readline("Pilih Pesanan: ");
$makanan = ["Mi Goreng", "Mi Rebus", "Nasi Goreng", "Nasi Uduk",];
$hargamakanan = [10000, 10000, 17000, 7000];
$minuman = ["Teh Manis", "Kopi", "Bajigur", "Bandrek",];
$hargaminuman = [5000, 5000, 4000, 4000];
$rokok = ["Sampoerna Mild", " Surya Gudang Garam", "Dji Sam Soe", "Marlboro",];
$hargarokok = [18000, 24000, 18500, 25000];
if ($input == 1) {
    echo "1. Mi Goreng \n" . "2. Mi Rebus\n" . "3. Nasi Goreng \n" . "4. Nasi Uduk \n";
} elseif ($input == 2) {
    echo "1. Teh Manis \n" . "2. Kopi\n" . "3. Bajigur \n" . "4. Bandrek \n";
} elseif ($input == 3) {
    echo "1. Sampoerna Mild\n" . "2. Surya Gudang Garam\n" . "3. Dji Sam Soe \n" . "4. Marlboro \n";
} else {
    echo "Pesanan tidak tersedia" . PHP_EOL;
}
$input2 = readline("Pilih Pesanan: ");
if ($input == 1 and $input2 == 1) {
    echo "Anda Membeli $makanan[0] dengan harga $hargamakanan[0]";
} elseif ($input == 1 and $input2 == 2) {
    echo "Anda Membeli $makanan[1] dengan harga $hargamakanan[1]";
} elseif ($input == 1 and $input2 == 3) {
    echo "Anda Membeli $makanan[2] dengan harga $hargamakanan[2]";
} elseif ($input == 1 and $input2 == 4) {
    echo "Anda Membeli $makanan[3] dengan harga $hargamakanan[3]";
} elseif ($input == 2 and $input2 == 1) {
    echo "Anda Membeli $minuman[0] dengan harga $hargaminuman[0]";
}elseif ($input == 2 and $input2 == 2) {
    echo "Anda Membeli $minuman[1] dengan harga $hargaminuman[1]";
}elseif ($input == 2 and $input2 == 3) {
    echo "Anda Membeli $minumann[2] dengan harga $hargaminuman[2]";
}elseif ($input == 2 and $input2 == 4) {
    echo "Anda Membeli $minuman[3] dengan harga $hargaminuman[3]";
}elseif ($input == 3 and $input2 == 1) {
    echo "Anda Membeli $makanan[4] dengan harga $hargamakanan[0]";
}elseif ($input == 3 and $input2 == 2) {
    echo "Anda Membeli $makanan[1] dengan harga $hargamakanan[1]";
}elseif ($input == 3 and $input2 == 3) {
    echo "Anda Membeli $makanan[1] dengan harga $hargamakanan[2]";
}elseif ($input == 3 and $input2 == 4) {
    echo "Anda Membeli $makanan[1] dengan harga $hargamakanan[3]";
}elseif ($input == 4 and $input2 == 1) {
    echo "Anda Membeli $makanan[1] dengan harga $hargamakanan[1]";
}elseif ($input == 3 and $input2 == 2) {
    echo "Anda Membeli $makanan[1] dengan harga $hargamakanan[1]";
}