<?php

$text = "Sulis | K3510001 | Solo | RPL
Rendi | K3510002 | Klaten | TKJ
Jatmiko | K3510003 | Boyolali | Multimedia
Feri | K3510004 | Wonogiri | RPL";

$rows = preg_split('/\r\n|\r|\n/', $text);
$result = [];
$i = 0;
foreach ($rows as $row){
    $column = explode(" | ", $row);
    $arrays = ["nama" => $column[0],"nim" => $column[1],"alamat" => $column[2],"bidang" => $column[3]];
    $result[$i] = $arrays;
    $i++;
}
print_r($result);

echo '<hr>';

$j = 0;
foreach ($result as $data){
    echo "$data[nama] | $data[nim] | $data[alamat] | $data[bidang]";
    echo "<br>";
    $j++;
}