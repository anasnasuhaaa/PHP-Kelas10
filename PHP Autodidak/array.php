<?php
$librarysmktibazma = [
    "Buku Pelajaran" => [
        "Sains" => ['Matematika', 'Fisika', 'Kimia', 'Biologi'],
        "IT" => ['Progdas', 'Informatika', 'Komjardas'],
    ],
    "Novel" => [
        "Habiburahman" => ['Ayat-ayat cinta', 'Bidadari Bermata Bening', 'Ayat-ayat cinta 2', 'Ketika cinta bertasbih'],
        "Tere Liye" => ['Negeri Para Bedebah', 'Negeri Di Ujung Tanduk', 'Bedehbah Di Ujung Tanduk', 'Bumi', 'Bulan', 'Matahari'],
        "Andre Hirata" => ['Laskar Pelangi', 'Sang Pemimpi', 'Ederson'],
    ],
    "Why" => ['Information Technology', 'Human', 'Future Energy', 'Cave', 'Economy', 'People']
];

// Menambahkan Buku tentang Psikologi
$librarysmktibazma["Psikologi"] = ['Berani Tidak Disukai', 'Filosofi Teras'];

//Menghapus Buku Why human
unset($librarysmktibazma["Why"][1]);


var_dump($librarysmktibazma);
// Menghitung Semua Jumlah Buku di Perpustakaan SMK TI BAZMA
$total = count($librarysmktibazma["Buku Pelajaran"]["Sains"]) +
    count($librarysmktibazma["Buku Pelajaran"]["IT"]) + 
    count($librarysmktibazma["Novel"]["Habiburahman"]) +
    count($librarysmktibazma["Novel"]["Tere Liye"]) + 
    count($librarysmktibazma["Novel"]["Andre Hirata"]) +
    count($librarysmktibazma["Why"]);
// echo $total;