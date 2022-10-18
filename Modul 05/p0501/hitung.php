<?php

function checkIn($data, $text){
    if(!isset($data)){
        printf("%s tidak diinputkan");
        die();
    }
}

$fn = $_GET['firstNumber'];
$sn = $_GET['secondNumber'];

checkIn($_GET['firstNumber'], "Nomor Pertama");
checkIn($_GET['operasi'], "Operasi Aritmatika");
checkIn($_GET['secondNumber'], "Nomor Kedua");

switch ($_GET['operasi']) {
    case '+':
        $result = $fn + $sn;
        break;
    case '-':
        $result = $fn - $sn;
        break;
    case 'x':
        $result = $fn * $sn;
        break;
    case '/':
        $result = $fn / $sn;
        break;    
    case '^':
        $result = pow($fn,$sn);
        break; 
    default:
        print("Operasi tidak valid");
        die();
        break;
}

echo "Hasil dari $_GET[firstNumber] $_GET[operasi] $_GET[secondNumber] adalah $result";