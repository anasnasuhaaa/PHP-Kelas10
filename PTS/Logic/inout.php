<?php


//Income
function add()
{
    global $x;
    global $jenispemasukan;
    global $jumlahpemasukan;


    echo "Catat Pemasukan\n";
    $jp = readline("Sumber Pemasukan: ");
    $jmp = readline("Jumlah Pemasukan: ");
    $jenispemasukan[] = $jp;
    $jumlahpemasukan[] = $jmp;
  

    $x++;
}

//Expense
function sub()
{
    global $y;
    global $jenispengeluaran;
    global $jumlahpengeluaran;
  

    echo "Catat Pengeluaran\n";
    $jq = readline("Keperluan Pengeluaran : ");
    $jmq = readline("Jumlah Pengeluaran    : ");
    $jenispengeluaran[] = $jq;
    $jumlahpengeluaran[] = $jmq;

    $y++;

}