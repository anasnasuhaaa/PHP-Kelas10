<?php
require_once("db_acount.php");
require_once("regist.php");

$login = false;
function login()
{
    global $db_user;
    global $db_password;
    global $login;
    global $input;


    $counter = true;
    while ($counter) {
        if ($input == 2) {
            register();
        } else {
            echo "\n----- L O G I N -----" . PHP_EOL;
            $username = readline("Username :");
            $password = readline("Password :");
            foreach ($db_user as $user) {
                if ($user['username'] === $username) {
                    $login = true;
                    $counter = false;
                } else {
                    $login = false;
                }
            }
            foreach ($db_password as $pw) {
                if ($pw['password'] === $password) {
                    $login = true;
                    $counter = false;
                } else {
                    $login = false;
                }
            }
            if ($login) {
                echo "Berhasil Login" . PHP_EOL;
                $counter = false;
            } else {
                echo "Gagal Login" . PHP_EOL . PHP_EOL;
                echo "1. Coba Login Lagi" . PHP_EOL;
                echo "2. Register" . PHP_EOL;
                $plh = readline("Pilhan :");
                if ($plh == 2) {
                    register();
                } elseif ($plh == 1) {
                    $counter = true;
                }
            }
        }



    }
}

function signin()
{
    global $login;

    $perulangan = true;
    while ($perulangan) {
        echo "\nAplikasi Catatan Keuangan" . PHP_EOL;
        echo "1. Login" . PHP_EOL;
        echo "2. Register" . PHP_EOL;
        $input = readline("Masukan Pilihan: ");

        if ($input == 1) {
            login();
            $perulangan = false;
        } elseif ($input == 2) {
            register();
        } else {
            echo "Pilihan Tidak Tersedia";

        }

    }
}