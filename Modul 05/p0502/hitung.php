<?php

error_reporting(1);

function checkIn($data, $text){
    if(!isset($data)){
        printf("%s tidak diinputkan");
        die();
    }
}

function checkGaji($data){
    checkIn($data,"Jabatan");
    switch ($data) {
        case 'Junior Programmer':
            $result = 4000000;
            break;
        case 'Senior Programmer':
            $result = 6000000;
            break;
        case 'Chief Technology Officer':
            $result = 8000000;
            break;
        case 'Manager':
            $result = 10000000;
            break;    
        default:
            print("Jabatan tidak valid");
            die();
            break;
    }
    return $result;
}

if($_POST){
    $nama = $_POST['nama'];
    checkIn($nama, "Nama");
    $gaji= checkGaji($_POST['jabatan']);
    $kinerja = $_POST['kinerja'];
    if(is_numeric($_POST['kinerja'])){
        $kinerja = ceil($_POST['kinerja']/10)*10;
        if ($kinerja < 50){
            $kinerja = 50;
        }elseif ($kinerja > 100) {
            $kinerja = 100;
        }
        $gajine = $kinerja/100 * $gaji;
    }else{
        print("Kinerja harus angka");
        die();
    }
}



echo "Gaji dari $_POST[nama] adalah $gajine";