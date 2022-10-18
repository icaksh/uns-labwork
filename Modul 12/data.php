<?php

include('koneksi.php');

$database = array (
    'host' => DB_HOST,
    'user' => DB_USER,
    'pass' => DB_PASS,
    'db' => DB_NAME
);

const TABLE = "tma";
const PRIMARY_KEY = "id_tma";

$columns = array(
    array("db"=> "id_tma", "dt" => 0),
    array("db"=> "nilai", "dt" => 1),
    array("db"=> "waktu", "dt" => 2)
);

require 'ssp.class.php';

echo json_encode(
    SSP::simple($_GET, $database, TABLE, PRIMARY_KEY, $columns)
);