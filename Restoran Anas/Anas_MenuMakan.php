<?php
$menumakan = ["nasipadang" => 15000, "nasigoreng" => 12500, "ayampanggang" => 20000, "sateayam" => 17000, "buburayam" => 7000];
$menuminum = ["tehmanis" => 5000, "tehtawar" => 3000, "jusjeruk" => 7000, "kopi" => 5000, "airmineral" => 3000];
echo "\n";
echo "Selamat Datang di Rumah Makan Anas" . PHP_EOL;
echo "Silahkan Untuk Memesan Makanan Yang Tersedia" . PHP_EOL;
echo "\n";
echo "-----Menu Makanan-----" . PHP_EOL;
echo "1. Nasi Padang\n" . "2. Nasi Goreng\n" . "3. Ayam Panggang\n" . "4. Sate Ayam\n" . "5. Bubur Ayam\n\n";
$inputmakan = readline("Pilih Makanan: ");
switch ($inputmakan) {
    case 1:
        echo "Anda memesan Nasi Padang dengan harga $menumakan[nasipadang] ";
        break;
    case 2:
        echo "Anda memesan Nasi Goreng dengan harga $menumakan[nasigoreng] ";
        break;
    case 3:
        echo "Anda memesan Ayam Panggang dengan harga $menumakan[ayampanggang] ";
        break;
    case 4:
        echo "Anda memesan Sate Ayam dengan harga $menumakan[sateayam] ";
        break;
    case 5:
        echo "Anda memesan Bubur Ayam dengan harga $menumakan[buburayam] ";
        break;
    default:
        echo "Maaf Menu yang anda pilih tidak tersedia";
}
echo "\n";
echo "\n";
$input2 = readline("Pesan Minuman Juga? (Iya/Tidak): ");
echo "\n";
if ($input2 == "Iya") {
    echo "-----Menu Minuman-----\n";
    echo "1. Teh Manis\n" . "2. Teh Tawar\n" . "3. Jus Jeruk\n" . "4. Kopi\n" . "5. Air Mineral" . PHP_EOL;
    echo "\n";
    $inputminuman = readline("Pilih Minuman: ");
    switch ($inputminuman) {
        case 1:
            echo "Anda memesan Teh Manis dengan harga $menuminum[tehmanis] ".PHP_EOL;
            break;
        case 2:
            echo "Anda memesan Teh Tawar dengan harga $menuminum[tehtawar] ".PHP_EOL;
            break;
        case 3:
            echo "Anda memesan Jus Jeruk dengan harga $menuminum[jusjeruk] ".PHP_EOL;
            break;
        case 4:
            echo "Anda memesan Kopi dengan harga $menuminum[kopi] ".PHP_EOL;
            break;
        case 5:
            echo "Anda memesan Air Mineral dengan harga $menuminum[airmineral] ".PHP_EOL;
            break;
        default:
            echo "Maaf Menu yang anda pilih tidak tersedia";
    }
    echo "Terima Kasih Telah Mampir";

} else{
    switch ($inputmakan) {
        case 1:
            echo "Total Harga Pesanan anda adalah $menumakan[nasipadang]\n" . 'Terima Kasih telah mampir';
            break;
        case 2:
            echo "Total Harga Pesanan anda adalah $menumakan[nasigoreng]\n" . 'Terima Kasih telah mampir';
            break;
        case 3:
            echo "Total Harga Pesanan anda adalaha $menumakan[ayampanggang]\n" . 'Terima Kasih telah mampir';
            break;
        case 4:
            echo "Total Harga Pesanan anda adalah $menumakan[sateayam]\n" . 'Terima Kasih telah mampir';
            break;
        case 5:
            echo "Total Harga Pesanan anda adalah $menumakan[buburayam]\n" . 'Terima Kasih telah mampir';
            break;
        default:
            echo "Maaf Menu yang anda pilih tidak tersedia";
    }
}