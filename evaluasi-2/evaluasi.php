<?php

class Register
{
    private $student = [
      [
        'name' => "Arief",
        'nik'  => "TOO1"
      ]
    ];
    
    public static function insertStudent($santri): void
    {
      $this->student = $santri;
    }
}

Register::insertStudent(['name' => $name, 'nik' => $nik])






// echo "+*+*+*+*+*+**+*+*+\n"."\n";
// echo "silakan pilih menu\n"."\n";
// echo "~+~+~+~+~+~+~+~+~+\n"."";
// echo "1.Tambah data\n 2.Update data\n 3.Hapus data\n";
// $pilih = trim(fgets(STDIN));
