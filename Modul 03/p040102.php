<?php

function buatBintangReverse($n){
    for($i=$n;$i >= 1;$i--){
        for ($j=1; $j <= $i ; $j++) { 
            print("*");
        }
        print("<br>");
    }
}

buatBintangReverse(10);