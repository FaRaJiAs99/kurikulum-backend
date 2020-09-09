<?php


for($a=1; $a<=9; $a++){  
	for($b=1; $b<=9; $b++){  
		if ($a == $b || $a > $b) {
         echo " + ";
        }else{
         echo " -&nbsp ";
        }
    }
    echo "<br/>";

}
?>