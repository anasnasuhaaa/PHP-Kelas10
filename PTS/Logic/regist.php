<?php
include_once("db_acount.php");

function register()
{
    global $db_user;
    global $db_password;


    echo "\n----- R E G I S T E R -----" . PHP_EOL;
    $newuser = readline("Masukan Username :");
    array_push($db_user, ['username' => $newuser]);
    $newpassword = readline("Masukan Password :");
    array_push($db_password, ['password' => $newpassword]);

    echo "Pendaftaran Berhasil" . PHP_EOL;
}