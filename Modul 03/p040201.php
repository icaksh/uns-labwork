<?php

function hitungGaji($gol, $masaKerja){
    switch ($gol) {
        case 'A':
            if($masaKerja<10){
                $gaji = 5000000;
            }else{
                $gaji = 7000000;
            }
            break;
        
        case 'B':
            if($masaKerja<10){
                $gaji = 6000000;
            }else{
                $gaji = 8000000;
            }
            break;
        default:
            $gaji = "Golongan Kosong";
    }

    return $gaji;
}

$gol = "A";
$masaKerja = 32;

function tabel($gol,$masaKerja,$gaji){
    echo "<tr><td>$gol</td><td>$masaKerja</td><td>$gaji</td>";
}

echo "<table style=\"border: 1px solid black;\">";
tabel(A,9,hitungGaji(A,9));
tabel(A,43,hitungGaji(A,43));
tabel(B,9,hitungGaji(B,9));
tabel(B,43,hitungGaji(B,43));
echo "</table>";