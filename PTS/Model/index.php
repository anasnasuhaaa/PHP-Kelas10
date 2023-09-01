<?php
require_once("../Logic/income.php");
require_once("../Logic/expense.php");
require_once("../Logic/login.php");
include_once("menu.php");

// Login
signin();

heading();
$program = true;
while ($program) {
    optionmenu();

    $input = readline("Masukan Pilihan: ");
    echo "\n ";
    if ($input == 1) {
        pemasukan();
    } elseif ($input == 2) {
        pengeluaran();
    } elseif ($input == 3) {
        saldo();
    } elseif ($input == 0) {
        echo "Sampai Jumpa Kembali";
        $program = false;
    } else {
        echo "Pilihan Tidak Tersedia" . PHP_EOL;
    }
}
