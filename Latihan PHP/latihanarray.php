<?php
/* 1. Buatlah Array dengan format No absen,
        Nama (nama depan $ nama belakang),
        Alatm (Kecamatan & Kabupaten),
        Usia 
   2. Tmbahkan Nojalan pada alamat */
        
$data = ["No absen" => 3,
         "Nama" => ["nama depan" => 'Anas',
                   "nama belakang" => 'Nasuha'],
         "Alamat" => ["kecamatan" => 'Gabuswetan',
                     "kabupaten" => 'Indramayu'],
         "Usia" => 15           
];



// tampilkan Kbupaten

/*echo $data["Alamat"]["kabupaten"];
echo "\n";
var_dump($data["Alamat"]["kabupaten"]);
*/
$data["Alamat"]["No Jalan"] = 103;

var_dump($data);
