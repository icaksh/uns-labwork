<?php

function getData($table_name, $table_column, $id){
    include("koneksi.php");
    $query = $koneksi->prepare("SELECT * FROM $table_name WHERE $table_column = ? ORDER BY name ASC");
    $query->execute([$id]);
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($rows as $row){
        echo "<option value=\"$row[id]\">$row[name]</option>";  
    }
}

switch ($_GET['jenis']) {
    case 'kota':
        $id = $_POST['id_provinsi'];
        if(!empty($id)){
            getData("regencies", "province_id", $id);
            exit;
        }else{
            exit;
        }
        break;
    case 'kecamatan':
        $id = $_POST['id_kota'];
        if(!empty($id)){
            getData("districts", "regency_id", $id);
            exit;
        }else{
            exit;
        }
        break;
    case 'kelurahan':
        $id = $_POST['id_kecamatan'];
        if(!empty($id)){
            getData("villages", "district_id", $id);
            exit;
        }else{
            exit;
        }
        break;
    default:
        break;
}