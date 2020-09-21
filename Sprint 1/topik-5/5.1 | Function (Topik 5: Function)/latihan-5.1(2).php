<?php



echo '1.1-luas_segitiga'."\n". '1.2-Keliling_segitiga'."\n";
echo '2.1.luas_lingkaran'."\n". '2.2.keliling_lingkaran'."\n";
echo '3.1.luas_trapesium'."\n". '3.2.keliling_trapesium'."\n";
echo "mau ngitung apa: ";
$pilihan= trim(fgets(STDIN));

// segitiga
// 1.1
function luas_segitiga($a, $t)
 {
    return (1/2*$a*$t);
 }
//  1.2
 function keliling_segitiga($s1,$s2,$s3) 
 {
     return $s1+$s2+$s3;
 }

// lingkaran
// 2.1
function luas_lingkaran($r) 
 {
    return 3.14*$r**2;  
 }
// 2.2
 function keliling_lingkaran($r) 
 {
    return 3.14*2*$r;
 }

// trapesium
// 3.1
function luas_trapesium($sa, $sb, $t) 
 {
    return (1/2*($sa+$sb)*$t);
 }
// 3.2
function keliling_trapesium($AB, $BC, $CD, $DA) 
 {
    return $AB+$BC+$CD+$DA;
 }




 if ($pilihan == 1.1) {
    echo "alas :";
    $alas = (int) trim(fgets(STDIN));
    echo "tinggi: ";
    $tinggi = (int) trim(fgets(STDIN));
    echo "Luas = " .luas_segitiga($alas, $tinggi)."\n";
}elseif ($pilihan == 1.2) {
    echo "sisi1: ";
    $sisi1 = (int) trim(fgets(STDIN));
    echo  "sisi2: ";
    $sisi2 = (int) trim(fgets(STDIN));
    echo "sisi3: ";
    $sisi3 = (int) trim(fgets(STDIN));
    echo "keliling =".keliling_segitiga($sisi1, $sisi2, $sisi3)."\n";
}elseif ($pilihan == 2.1) { 
    echo "jari-jari: ";
    $r = (int) trim(fgets(STDIN));
    echo "luas lingkaran: ".luas_lingkaran($r)."\n";
}elseif ($pilihan == 2.2) {
    echo "jari-jari: ";
    $r = (int) trim(fgets(STDIN));
    echo "keliling lingkaran: ".keliling_lingkaran($r)."\n";
}elseif ($pilihan == 3.1) {
    echo "sisi sejajar atas : ";
    $sa = (int) trim(fgets(STDIN));
    echo "sisi sejajar bawah: ";
    $sb = (int) trim(fgets(STDIN));
    echo "tinggi: ";
    $t = (int) trim(fgets(STDIN));
    echo "luas trapesium: ".luas_trapesium($sa, $sb, $t)."\n";
}elseif ($pilihan == 3.2) {
    echo "pojok A-B: ";
    $AB = (int) trim(fgets(STDIN));
    echo "pojok B-C: ";
    $BC = (int) trim(fgets(STDIN));
    echo "pojok C-D: ";
    $CD = (int) trim(fgets(STDIN));
    echo "pojok D-A: ";
    $DA = (int) trim(fgets(STDIN));
    echo "keliling trapesium: ".keliling_trapesium($AB, $BC, $CD, $DA)."\n";
}else{
    echo "pilihan tidak ditemukan !"."\n";
}













// function luaspersegi ($p, $l = 5) {
//  echo $p*$l;
// }
// luaspersegi(5);
 