<?php

require_once("database.php");
function showdata()
{
    global $data;
    echo "Database".PHP_EOL;
    foreach ($data as $key=>$value) {
        echo "$key. $value" . PHP_EOL;
    }
}