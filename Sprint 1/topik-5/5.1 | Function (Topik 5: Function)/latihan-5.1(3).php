<?php

// $variable = [2, 3, 4, 5, 6, 7, 8, 9];

echo "jumlah data yang ingin diinput: ";
 $input = trim(fgets(STDIN));


    function nilai($variable){
       foreach ($variable as $key => $value) {
           $variable[$key]*=3;
       }   
       return $variable;
    }

for ($i=1; $i <= $input ; $i++) 
{ 
    echo "Input ke-".$i."=>";
    $array[] = trim(fgets(STDIN));
}

print_r($array);
$result = nilai($array);
print_r($result);