<?php


//Edit Income
function Editincome()
{
    global $jenispemasukan;
    global $jumlahpemasukan;

    echo "Mengedit Data Pemasukan\n";
    $edit = readline("Data Yang Ingin Diedit: ");
    if ($edit > count($jenispemasukan)) {
        echo "Gagal Mengedit, Data $edit Tidak Ditemukan" . PHP_EOL;
    } else {

        $jenispemasukan[$edit - 1] = readline("Sumber Pemasukan: ");
        $jumlahpemasukan[$edit - 1] = readline("Jumlah Pemasukan: ");
        echo "Sukses Mengedit Data $edit\n";
    }

}

//Edit Expense
function editexpense()
{
    global $jenispengeluaran;
    global $jumlahpengeluaran;

    echo "Mengedit Data Pengeluaran\n";
    $edit = readline("Data Yang Ingin Diedit: ");
    if ($edit > count($jenispengeluaran)) {
        echo "Gagal Mengedit, Data $edit Tidak Ditemukan" . PHP_EOL;
    } else {
        echo "Sukses Mengedit Data $edit" . PHP_EOL;
        $jenispengeluaran[$edit - 1] = readline("Jenis Pengeluaran: ");
        $jumlahpengeluaran[$edit - 1] = readline("Jumlah Pengeluaran: ");
    }

}