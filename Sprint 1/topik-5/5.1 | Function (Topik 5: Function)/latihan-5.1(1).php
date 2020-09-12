<?php

echo '1.luas'."\n". '2.keliling'."\n";
echo "mau ngitung apa: ";
$pilihan= trim(fgets(STDIN));

 function luas($p,$l){
     return $p*$l;
 }
 function keliling ($p,$l) {
     return ($p + $l) *2;
 }

 if ($pilihan == 1) {
    echo "panjang: ";
    $panjang = (int) trim(fgets(STDIN));
    echo "lebar: ";
    $lebar = (int) trim(fgets(STDIN));
    echo "Luas = " .luas($panjang, $lebar)."\n";
}elseif ($pilihan == 2) {
    echo "panjang: ";
    $panjang = (int) trim(fgets(STDIN));
    echo  "lebar: ";
    $lebar = (int) trim(fgets(STDIN));
    echo "keliling =".keliling($panjang, $lebar)."\n";
}else{
    echo "pilihan tidak ditemukan !"."\n";
}













// function luaspersegi ($p, $l = 5) {
//  echo $p*$l;
// }
// luaspersegi(5);
 