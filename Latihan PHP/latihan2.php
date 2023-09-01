<?php
$buah = ["apel", "semangka", "anggur", "melon", "pepaya", "jeruk", "pisang"];

// 2. tampilakn buah melon
var_dump($buah [3]);

// 3. Mengganti semangka menjadi dragon fruit
$buah[1] = "Dragon Fruit";
var_dump($buah);

// 4. Menambah buah salah dan Gomu homu no Mi
$buah[] = "Salak";
$buah[] = "Gomu Gpmu no Mi";
var_dump($buah);

// 5. Menghapus Buah salak
unset($buah[7]);
var_dump($buah);

// 6. Menghitung total buah yang terdapat dalam variabel
echo count($buah);
