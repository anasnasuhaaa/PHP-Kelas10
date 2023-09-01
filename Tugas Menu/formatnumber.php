<?php
function fungsi($a, $b, $c)
{
    if ($c == "tambah") {
        echo $a + $b;

    } elseif ($c == "kurang") {
        echo $a - $b;
    } elseif ($c == "kali") {
        echo $c * $b;
    } elseif ($c == "bagi") {
        echo $c / $b;
    } elseif ($c == "pangkat") {
        echo $c ** $b;
    }else{
        echo "tidak ada pilihan";
    }
}
fungsi(3, 2, "kurang");