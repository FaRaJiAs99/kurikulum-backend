<?php


echo "Jumlah data yang akan diinput : ";

$input_data = trim(fgets(STDIN));
// $input_data =  [9];

for ($i=1; $i <= $input_data; $i++) { 
    echo "Input ke-".$i." : ";
    
    // $nilai = [5, 9, 6, 7, 9, 8 , 10, 7, 8];

    $nilai[] = trim(fgets(STDIN));
}

rsort($nilai);

echo "\n";

for ($i=0; $i < 3; $i++) { 
    $tertinggi[] = $nilai[$i];
}
echo ">Highest : ";
print_r($tertinggi);

sort($nilai);

for ($i=0; $i < 3; $i++) { 
    $terkecil[] = $nilai[$i];
}
echo ">Lowest : ";
print_r($terkecil);








// echo"mau input berapa nilai: ";
// $nilai = (int) trim(fgets(STDIN));

// // var_dump($nilai);

// for ($i=1; $i <= $nilai; $i++) {
//     echo "input ke-".$i .": ";
//     $input_nilai[] = trim(fgets(STDIN));

// }
 
// $nilai = [5, 9, 6, 7, 9, 8, 10, 7, 8 ];
// print_r($input_nilai);

// $mean = count($input_nilai);
// echo "\n>Mean: ";
// print_r(array_sum($input_nilai)/$mean);
// echo "\n";


// $median = count($input_nilai)/2;
// echo "\n>median:";
// sort($input_nilai);
// if(is_double($median)){
//     $median = floor($median);
//     echo $input_nilai[$median];
// }else {
//     echo ($input_nilai[$median]+$input_nilai[$median-1])/2;
// }

// echo "\n";

// $modus = array_count_values($input_nilai);
// arsort($modus);
// echo ">Modus : ";
// foreach ($modus as $key => $value) 
// {
//     if ($value == max($modus)) 
//     {        
//         echo $key . ", ";
//     }
// }

// $frekuensi = max($modus);
// echo "Frekuensi : " . $frekuensi;


// echo "\nnilai tengah: ";


// print_r($input_nilai);


// for ($n=1; $n <= 9; $n++) { 
//     for ($m=1; $m <= 9; $m++) {
//         if ($n + $m == 10 || $n + $m > 10) {
//             echo "&nbsp+&nbsp";
//         } else {
//             echo "&nbsp&nbsp-&nbsp";
//         }
//     }
//     echo "<br>";
// }

