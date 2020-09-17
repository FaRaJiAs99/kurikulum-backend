<?php
class Rumus {
        
        // kotak
        public static function persegiPanjang($p, $l, $rumus) {
            if ($rumus == 'luas') { 
             return $p*$l;
            }
            elseif ($rumus == 'keliling') {
                return ($p+$l)*2;        
            }
           
    }    
        public static function lingkaran($r, $rumus) {
            if ($rumus == 'luas') { 
             return 3.14*$r**2;
            }
            elseif ($rumus == 'keliling') {
                return 3.14*2*$r;        
            }
           
    }    
        public static function LTrapesium($sa, $sb, $t, $rumus) {
            if ($rumus == 'luas') { 
             return 1/2*($sa+$sb)*$t;
            }
    }   
        public static function KTrapesium($AB, $BC, $CD, $DA, $rumus) {
            if ($rumus == 'keliling') {
                return $AB+$BC+$CD+$DA;           
            }
              
    }
       
}    

 function Hitung() {
    echo "_-_-_-_-_-_-_-_-_-_-_-_\n";
    echo "|      ~~RUMUS~~      |\n";
    echo "_+_+_+_+_+_+_+_+_+_+_+_\n";
    echo "1.PersegiPanjang"."\n"."2.Lingkaran"."\n"."3.Trapesium"."\n";
    echo "mau ngitung apa: ";
    $pilihan= trim(fgets(STDIN));
 

    if ($pilihan == 1) {
        
        echo "1. Luas"."\n"."2. Keliling"."\n"."Mau mencari apa?\n";
        $rumus = (int) trim(fgets(STDIN));
        echo "----- Persegi Panjang ----- \n";
        echo "[][][][][][][][][][][][][]  \n";
        
        if ($rumus == 1) {
            $rumus = 'luas';
            echo "Panjang : ";
            $p = (int) trim(fgets(STDIN));
            echo "Lebar : ";
            $l = (int) trim(fgets(STDIN));
            echo $rumus . "-nya adalah : " . Rumus::persegiPanjang($p, $l, $rumus);
        } else if ($rumus == 2) {
            $rumus = 'keliling';
            echo "Panjang : ";
            $p = (int) trim(fgets(STDIN));
            echo "Lebar : ";
            $l = (int) trim(fgets(STDIN));
            echo $rumus . "-nya adalah : " . Rumus::persegiPanjang($p, $l, $rumus);
        } else {
        echo "Perintah yang dimasukkan salah\n";
        }
        
        echo "\n";

    }elseif ($pilihan == 2){  //lingkaran
        echo "-(-(-(-(lingkaran)-)-)-)-\n";
        echo "1. Luas"."\n"."2. Keliling"."\n"."Mau mencari apa?\n";
        $rumus = (int) trim(fgets(STDIN));
        echo "-(-(-(-(lingkaran)-)-)-)-\n";
        echo "OOOOOOOOOOOOOOOOOOOOOOOO \n";
        if ($rumus == 1) {
            $rumus = 'luas';
            echo "jari-jari: ";
            $r = (int) trim(fgets(STDIN));
            // echo "Lebar : ";
            // $l = (int) trim(fgets(STDIN));
            echo $rumus . "-nya adalah : " . Rumus:: lingkaran($r, $rumus);
        } else if ($rumus == 2) {
            $rumus = 'keliling';
            echo "Jari-jari: ";
            $r = (int) trim(fgets(STDIN));
            // echo "Lebar : ";
            // $l = (int) trim(fgets(STDIN));
            echo $rumus . "-nya adalah : " . Rumus:: lingkaran($r, $rumus);
        } else {
        echo "Perintah yang dimasukkan salah\n";
        }
        echo "\n";
    }elseif ($pilihan == 3){  //Trapesium
        echo "-(-(-(-(trapesium)-)-)-)-\n";
        echo "1. Luas"."\n"."2. Keliling"."\n"."Mau mencari apa?\n";
        $rumus = (int) trim(fgets(STDIN));
        echo "-(-(-(-(trapesium)-)-)-)-\n";
        echo "><><><><><><><><><><><>< \n";
        if ($rumus == 1) {
            $rumus = 'luas';
            echo "sisi sejajar atas: ";
            $sa = (int) trim(fgets(STDIN));
            echo "sisi sejajar bawah: ";
            $sb = (int) trim(fgets(STDIN));
            echo "tinggi : ";
            $t = (int) trim(fgets(STDIN));
            echo $rumus . "-nya adalah : " . Rumus::LTrapesium($sa, $sb, $t, $rumus);
        } else if ($rumus == 2) {
            $rumus = 'keliling';
            echo "sudut A-B: ";
            $AB = (int) trim(fgets(STDIN));
            echo "sudut B-C: ";
            $BC = (int) trim(fgets(STDIN));
            echo "sudut C-D: ";
            $CD = (int) trim(fgets(STDIN));
            echo "Sudut D-A: ";
            $DA = (int) trim(fgets(STDIN));
            echo $rumus . "-nya adalah : " . Rumus::KTrapesium($AB, $BC, $CD, $DA, $rumus);
        } else {
        echo "Perintah tidak dapat di mengerti";
        }
        echo "\n";
    } else 
    {
        echo "###ERROR###\n";
        echo "###ERROR###\n";
        echo "###ERROR###\n";
        echo "###ERROR###\n";
        
    } 
    echo "~~~~Tugas selsai~~~~";
    echo "\n";

    echo "Ingin melakukan hitungan lagi...?\n";
    echo "y = iya"."\n"."n = tidak\n"."=>";
    $lagi = trim(fgets(STDIN));
     if ($lagi == 'y') {
         Hitung();
     }else{
         echo "!!!!!!!!!!!!!!!!!!\n";
         echo "~~~terima kasih~~~\n";
         echo "~~~~~~~~~~~~~~~~~~\n";
         echo "~~~sampai jumpa~~~\n";
         echo "------------------\n";
     }
     
}    
Hitung();