<?php

for($i=1; $i<=6; $i++){
    if($i%2 == 0){
        echo "<h$i style=\"color: red;\">Mahasiswa $i</h$i>";
    }else{
        echo "<h$i>Mahasiswa $i</h$i>";
    }
    
}