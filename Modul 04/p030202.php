<?php

echo "<table border=\"1\">";
for($i=1; $i<=5; $i++){ // row
    echo "<tr>";
    for($j=1; $j<=6; $j++){
        if(($i + $j)%2 ==0){
            echo "<td style=\"background-color: red;\"> elemen $i - $j </td>";
        }else{
            echo "<td style=\"border-color:red; color: red;\"> elemen $i - $j </td>";
        }
    }
    echo "</tr>";
}
echo "</table>";