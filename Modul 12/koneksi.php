<?php

const DB_HOST = "127.0.0.1";
const DB_USER = "root";
const DB_PASS = "";
const DB_NAME = "bengawan_solo";

try{
    $koneksi = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $koneksi->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
}catch(PDOException $e){
    echo "Gagal melakukan koneksi ke database".$e->getMessage();
}