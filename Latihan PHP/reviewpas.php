<?php

$weight = 90;
if ($weight >= 39 and $weight <= 42) {
    echo "Kelas A";
} elseif ($weight > 42 and $weight <= 45) {
    echo "Kelas B";
} elseif ($weight > 42 and $weight <= 48) {
    echo "Kelas C";
} elseif ($weight > 48 and $weight <= 51) {
    echo "Kelas D";
} elseif ($weight > 51 and $weight <= 54) {
    echo "Kelas E";
} else {
    echo "Kelas tidak tersedia";
}

echo "\n";
echo "\n";

$username = "Alam";
$password = "4L4m";
if ($username == "Alam" and $password == "4L4m") {
    echo "Selamat datang $username";
} elseif ($username == "Alam" and $password != "4L4m") {
    echo "Password anda salah";
} else {
    echo "Akun tidak terdaftar";
}  