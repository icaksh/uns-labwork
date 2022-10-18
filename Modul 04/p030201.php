<?php

echo "<table border=\"1\">";
for($i=1; $i<=5; $i++){ // row
    echo "<tr>";
    for($j=1; $j<=6; $j++){
        echo "<td> elemen $i - $j </td>";
    }
    echo "</tr>";
}
echo "</table>";