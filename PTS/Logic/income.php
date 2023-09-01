<?php
include_once("../Model/database.php");
include_once("show.php");
include_once("remove.php");
include_once("../Model/menu.php");
include_once("edit.php");
include_once("inout.php");

function pemasukan()
{
    global $x;
    global $jenispemasukan;
    global $jumlahpemasukan;

    $counter = true;
    while ($counter) {

        if ($x > 0) {
            // Mneampilkan Data
            showincome();
            echo "\n ";
        }

        optionafter();
        $pilih = readline("Masukan Pilihan: ");
        echo "\n ";
        if ($pilih == 1) {
            // Menambah Data Pemasukan
            add();
        } elseif ($pilih == 2 and $x > 0) {
            // Mengedit Data Pemasukan
            editincome();
        } elseif ($pilih == 3 and $x > 0) {
            // Menghapus Data Pemasukan
            removeincome();
        } elseif ($pilih == 0) {
            //Kembali Ke Menu
            $counter = false;
        } else{
            echo '! Pilihan Tidak Tersedia !'.PHP_EOL;
        }
        
        if ($pilih <= 3 and $x <= 0) {
            // Tampilan Saat Belum Memasukan Data
            echo "! TIDAK ADA DATA !" . PHP_EOL;
        }

    }
}