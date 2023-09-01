<?php


//Income Remove
function removeincome()
{
    global $jumlahpemasukan;
    global $jenispemasukan;
    global $x;


    echo "Mengahapus Data Pemasukan\n";
    $hapus = readline("Data Yang Ingin Dihapus: ");
    if ($hapus <= count($jumlahpemasukan)) {
        echo "Sukses Menghapus Data $hapus\n";

        unset($jenispemasukan[$hapus - 1]);
        unset($jumlahpemasukan[$hapus - 1]);

        $jenispemasukan = array_values($jenispemasukan);
        $jumlahpemasukan = array_values($jumlahpemasukan);
        $x--;
    } else {
        echo "Gagal Menghapus, Data $hapus Tidak Ditemukan" . PHP_EOL;
    }

}

//Expense Remove
function removeexpense()
{
    global $jumlahpengeluaran;
    global $jenispengeluaran;
    global $y;

    echo "Menghapus Data Pengeluaran\n";
    $hapus = readline("Data Yang Ingin Dihapus: ");
    if ($hapus <= count($jumlahpengeluaran)) {
        echo "Sukses Menghapus Data $hapus\n";
        
        unset($jenispengeluaran[$hapus - 1]);
        unset($jumlahpengeluaran[$hapus - 1]);

        $jenispengeluaran = array_values($jenispengeluaran);
        $jumlahpengeluaran = array_values($jumlahpengeluaran);
        $y--;
    } else {
        echo "Gagal Menghapus, Data $hapus Tidak Ditemukan" . PHP_EOL;
    }

}