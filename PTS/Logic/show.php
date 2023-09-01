<?php
// include_once("../Model/database.php");

function showincome()
{
    global $x;
    global $jenispemasukan;
    global $jumlahpemasukan;

    echo "-------------------------------------------" . PHP_EOL;
    echo "No.\tPemasukan\t\tJumlah " . PHP_EOL;
    echo "-------------------------------------------" . PHP_EOL;
    for ($i = 1; $i <= $x; $i++) {
        echo "$i.\t" . ($jenispemasukan[$i - 1]) . "\t\t" . number_format($jumlahpemasukan[$i - 1], 0, ",", ".") . PHP_EOL;
    }
    echo "-------------------------------------------" . PHP_EOL;
    echo "Total Pemasukan: " . number_format(array_sum($jumlahpemasukan), 0, ",", ".") . PHP_EOL;
    echo "-------------------------------------------" . PHP_EOL;
}

//Show Expense
function showexpense()
{
    global $y;
    global $jenispengeluaran;
    global $jumlahpengeluaran;

    echo "-------------------------------------------" . PHP_EOL;
    echo "No.\tPengeluaran\t\tJumlah " . PHP_EOL;
    echo "-------------------------------------------" . PHP_EOL;
    for ($i = 1; $i <= $y; $i++) {
        echo "$i.\t" . ($jenispengeluaran[$i - 1]) . "\t\t" . number_format($jumlahpengeluaran[$i - 1], 0, ",", ".") . PHP_EOL;
    }
    echo "-------------------------------------------" . PHP_EOL;
    echo "Total Pengeluaran: " . number_format(array_sum($jumlahpengeluaran), 0, ",", ".") . PHP_EOL;
    echo "-------------------------------------------" . PHP_EOL;
}

// Saldo
function saldo()
{
    global $jumlahpemasukan;
    global $jumlahpengeluaran;
    global $x;
    global $y;

    if ($x == 0 and $y == 0) {
        echo "! TIDAK ADA DATA !".PHP_EOL;
    } else {
        // Pemasukan + Pengeluaran
        $sumincomeexpense = array_sum($jumlahpemasukan) + array_sum($jumlahpengeluaran);

        // Total Saldo
        $saldo = array_sum($jumlahpemasukan) - array_sum($jumlahpengeluaran);

        // Persentase Pemasukan dan Pengeluaran
        $persentaseincome = number_format(array_sum($jumlahpemasukan) / $sumincomeexpense * 100, 0, ",", ".");
        $persentaseexpense = number_format(array_sum($jumlahpengeluaran) / $sumincomeexpense * 100, 0, ",", ".");

        // Tampilkan
        echo "Total Saldo Anda Adalah: " . number_format(($saldo), 0, ",", ".") . PHP_EOL . PHP_EOL;
        echo "------------ R I N C I A N ------------" . PHP_EOL;
        echo "Total Pemasukan\t\t: " . number_format(array_sum($jumlahpemasukan), 0, ",", ".") . PHP_EOL;
        echo "Total Pengeluaran\t: " . number_format(array_sum($jumlahpengeluaran), 0, ",", ".") . PHP_EOL;
        echo "Persentase Pemasukan\t: $persentaseincome%" . PHP_EOL;
        echo "Persentase Pengeluaran\t: $persentaseexpense%" . PHP_EOL;
        echo "---------------------------------------" . PHP_EOL;
    }
}