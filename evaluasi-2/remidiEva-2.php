<?php

class Register{
    private $santri = [  
        ['nama' => "Abdullah",'nik'  => "21092020-01"],
        ['nama' => "Ahmad",   'nik'  => "21092020-02"]
    ];
    
    public static function insertStudent(){
      echo "Data santri baru\n";
      echo "NIK: ";
      $nik = trim(fgets(STDIN));
      echo "nama: ";
      $nama = trim(fgets(STDIN));
      $index = count(self::$santri);
    
      self::$santri[$index]['nik']  = $nik;
      self::$santri[$index]['nama'] = $nama;

      print_r(self::$santri);
    }
}

class penglolaan extends Register {
    public function __construct($program) {
      if($program == 'update' )
        $this->UpdateStudent();
      }elseif($program == 'delete' ){
        $this->UpdateStudent()
      };

}





$menu = true;
while ($kondisi) {

echo "+*+*+*+*+*+**+*+*+\n"."\n";
echo "silakan pilih menu\n"."\n";
echo "~+~+~+~+~+~+~+~+~+\n"."";
echo "1.Tambah data\n 2.Update data\n 3.Hapus data\n";
$pilih = trim(fgets(STDIN));

	switch ($pilih) {
    // menambah data
	case 1:
	Register::insertStudent();
	break;
	// untuk merubah data
	case 2:
	$kelola = new Pengelolaan;
	$kelola->updateStudent();
	break;
	// menghapus
	case 3:
	$kelola = new Pengelolaan("delete");
	break;
	
	default:
	echo "PERINTAH TIDAK DAPAT DIPAHAMI\n";
	break;
	}

