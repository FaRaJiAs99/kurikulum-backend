<?php

$bil = 5956560159466056;
function selectionValue($bil): int{
    $arr_bil = explode('0',(string)$bil);
    print_r($arr_bil);
    foreach($arr_bil as $key => $value){
        $bil2[] = str_split($arr_bil[$key],1);
    
    }
    foreach($bil2 as $key =>$value){
        sort($bil2[$key]);
    }
    $hasil = "";
    for($i=0;$i<count($bil2);$i++){
        for($j=0;$j<count($bil2[$i]);$j++){
            $hasil .= $bil2[$i][$j];
        }
    }
    return $hasil;
}
echo selectionValue($bil)."\n";
 
 ?>
 <?php
 // evaluasi1
 // 1
 
 //  for ($i = 0; $i <= 9 ; $i++) { 
     //      for ($j = 0;  $j <= 9 ; $j++) 
     //      {
         //         if ($i == 1 || $i == 3 ||$i == 5 || $i == 7 || $i == 9)
//         {
    //             echo " + ";
    //         }
    //         else{   
        //              echo "&nbsp- ";
//         }
//      }
//      echo "<br/>";
        
// }echo "<br/>";



// for ($i = 0; $i <= 9 ; $i++) { 
//     for ($j = 0;  $j <= 9 ; $j++) 
//     {
//        if ($j == 1 || $j == 3 ||$j == 5 || $j == 7 || $j == 9)
//        {
//            echo " - ";
//        }
//        else{   
//             echo "&nbsp+ ";
//        }
//     }
//     echo "<br/>";
       
// }



//2
