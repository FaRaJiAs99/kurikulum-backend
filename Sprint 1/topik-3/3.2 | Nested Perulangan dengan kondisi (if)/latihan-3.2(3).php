<?php

for ($n=1; $n <= 9; $n++) { 
    for ($m=1; $m <= 9; $m++) {
        if ($n + $m == 10 || $n == $m || $n > $m && $n + $m > 10 || $n < $m && $n + $m < 10) {
            echo "+ ";
        } else {
            echo "&nbsp- ";
        }
    }
    echo "<br//>";
}
