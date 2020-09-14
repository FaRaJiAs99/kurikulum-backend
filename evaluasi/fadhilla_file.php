<?php

//  evaluasi1
//  1
 
  for ($i = 0; $i <= 9 ; $i++) { 
          for ($j = 0;  $j <= 9 ; $j++) 
          {
                 if ($i == 1 || $i == 3 ||$i == 5 || $i == 7 || $i == 9)
        {
                echo " + ";
            }
            else{   
                     echo "&nbsp- ";
        }
     }
     echo "<br/>";
        
}echo "<br/>";



for ($i = 0; $i <= 9 ; $i++) { 
    for ($j = 0;  $j <= 9 ; $j++) 
    {
       if ($j == 1 || $j == 3 ||$j == 5 || $j == 7 || $j == 9)
       {
           echo " - ";
       }
       else{   
            echo "&nbsp+ ";
       }
    }
    echo "<br/>";
       
}



// 2.
