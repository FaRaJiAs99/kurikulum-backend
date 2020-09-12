<?php

echo"mau input berapa nilai: ";
$nilai = (int) trim(fgets(STDIN));

// var_dump($nilai);

for ($i=1; $i <= $nilai; $i++) {
    echo "input ke-".$i .": ";
    $input_nilai[] = trim(fgets(STDIN));

}
 
// $nilai = [5, 9, 6, 7, 9, 8, 10, 7, 8 ];
// print_r($input_nilai);

$mean = count($input_nilai);
echo "\n>Mean: ";
print_r(array_sum($input_nilai)/$mean);
echo "\n";


$median = count($input_nilai)/2;
echo "\n>median:";
sort($input_nilai);
if(is_double($median)){
    $median = floor($median);
    echo $input_nilai[$median];
}else {
    echo ($input_nilai[$median]+$input_nilai[$median-1])/2;
}

echo "\n";

$modus = array_count_values($input_nilai);
arsort($modus);
echo ">Modus : ";
foreach ($modus as $key => $value) 
{
    if ($value == max($modus)) 
    {        
        echo $key . ", ";
    }
}

$frekuensi = max($modus);
echo "Frekuensi : " . $frekuensi;
