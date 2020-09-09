<?php


for($a=1; $a<=9; $a++){  
	for($b=1; $b<=9; $b++){  
		if ($a + $b ==10 || $a + $b > 10) {
         echo "&nbsp+ ";
        }else{
         echo "&nbsp- &nbsp";
        }
    }
    echo "<br/>";

}
?>