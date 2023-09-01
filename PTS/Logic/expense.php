<?php
include_once("../Model/database.php");
include_once("show.php");
include_once("remove.php");
include_once("../Model/menu.php");
include_once("edit.php");
include_once("inout.php");

function pengeluaran()
{
    global $y;
    global $jumlahpengeluaran;
    global $jenispengeluaran;

    $counter = true;
    while ($counter) {

        if ($y > 0) {
            // Mneampilkan Data
            showexpense();
            echo "\n ";
        }

        optionafterout();
        $pilih2 = readline("Masukan Pilihan: ");
        echo "\n ";
        if ($pilih2 == 1) {
            // Menambah Data Pengeluaran
            sub();
        } elseif ($pilih2 == 2 and $y > 0) {
            // Mengedit Data Pengeluaran
            editexpense();
        } elseif ($pilih2 == 3 and $y > 0) {
            // Menghapus Data Pengeluaran
            removeexpense();
        } elseif ($pilih2 == 0) {
            // Kembali Ke Menu
            $counter = false;
        } else{
            echo '! Pilihan Tidak Tersedia !'.PHP_EOL;
        }

        if ($pilih2 <= 3 and $y <= 0) {
            // Tampilan Saat Belum Memasukan Data
            echo "! TIDAK ADA DATA !" . PHP_EOL;
        }

    }
}