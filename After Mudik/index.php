<?php

function programnilai()
{

    echo "\n";
    $value = readline("Nilai :");
    if ($value <= 100 and $value >= 91) {
        echo "Point A";
    } elseif ($value <= 90 and $value >= 81) {
        echo "Point B";
    } elseif ($value <= 80 and $value >= 61) {
        echo "Ponit C";
    } else {
        echo "Point dibawah 61";
    }
}
function programusia()
{

    echo "\n";
    $age = readline("Usia :");
    if ($age > 35) {
        echo "Tua";
    } elseif ($age <= 35 and $age >= 26) {
        echo "Dewasa";
    } elseif ($age <= 25 and $age >= 12) {
        echo "Remaja";
    } elseif ($age <= 11 and $age >= 5) {
        echo "Kanak Kanak";
    } elseif ($age <= 5) {
        echo "Balita";
    } else {
        echo "Tidak Valid";
    }
}
function welcomeblade()
{
    echo "\n";
    echo "\n";
    echo "Pilih Program: \n";
    echo "1. Program Nilai \n";
    echo "2. Program Usia \n";
    echo "3. Batal \n";
}
$counter = true;
while ($counter) {
    welcomeblade();
    $pilih = readline("Pilih> ");
    if ($pilih == 1) {
        programnilai();
    } elseif ($pilih == 2) {
        programusia();
    } elseif ($pilih == 3) {
        $counter = false;
    } else {
        echo "Pilihan Tidak Tersedia";
    }
}
