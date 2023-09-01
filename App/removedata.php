<?php
require_once("database.php");
require_once("show.php");

function removedata (int $number): bool
{
    global $data;
    if ($number > sizeof($data)) {
        return false;
    }
    for ($i = $number; $i < sizeof($data); $i++) {
        $data[$i] = $data[$i + 1];
    }
    unset($data[count($data)]);
    return true;
}


$data[1] = "Toyota";
$data[2] = "Daihatsu";
$data[3] = "Honda";
$data[4] = "Suzuki";
$data[5] = "Audi";

removedata(4);
showdata();