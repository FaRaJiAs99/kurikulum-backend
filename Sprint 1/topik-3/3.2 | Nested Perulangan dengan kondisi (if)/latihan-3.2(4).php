<?php

for ($n=1; $n <= 9; $n++) { 
    for ($m=1; $m <= 9; $m++) {
        if ($n == 1||$m == 1 && $m + $n < 6||$n == 5||$m == 9 && $m + $n > 14||$n == 9 ) {
            echo "&nbsp+&nbsp";
        } else {
            echo "&nbsp&nbsp-&nbsp";
        }
    }
    echo "<br/>";
}