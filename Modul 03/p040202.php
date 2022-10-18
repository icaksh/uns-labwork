<?php
date_default_timezone_set("Asia/Jakarta");

function hitungDenda($tglHarusKembali, $tglKembali){
    if(strtotime($tglHarusKembali) && strtotime($tglKembali)){
        $hari = strtotime($tglHarusKembali) - strtotime($tglKembali);
        $hariTerlambat = floor($hari/(24*60*60));
        if($hari >= 0){
            return 0;
        }
        return abs($hariTerlambat) * 5000;
    }else{
        return "Error, format tanggal salah (Harus YYYY-mm-dd)";
    }
}

printf("Denda lima hari: %d",hitungDenda("2021-09-25","2021-09-30"));
