<?php
	class Anak{
		

		public $nama, $umur, $hobi, $citacita;
		public function __construct($nama = "NAMA", $umur = "UMUR", $hobi = "HOBI", $citacita= "CITA CITA"){
			$this->nama = $nama;
			$this->umur = $umur;
			$this->hobi = $hobi;
			$this->citacita = $citacita;
		}
		public function getinfoAnak(){
			$mhs = "NAMA : {$this->nama}, UMUR : {$this->umur}, UMUR : {$this->umur}, CITA CITA : {$this->citacita}";
			return $mhs;
		}
	}
	class UrutanAnakPertama extends Anak{
		public function getinfoAnak(){
			$mhs = "ANAK KE-1 : ".parent ::getinfoAnak();
			return $mhs;
		}
	}
	class UrutanAnakKedua extends Anak{
		public $status;
		public function __construct($nama, $umur, $hobi, $citacita, $status){
			parent::__construct($nama, $umur, $hobi, $citacita);
			$this->status = $status;
		}
		public function getinfoAnak(){
			$mhs = "ANAK KE-2 : ".parent::getinfoAnak()." STATUS : {$this->status}";
			return $mhs;
		}
	}
	$anak1 = new UrutanAnakPertama("MUHAMMAD SUNARDI", "19", "MAIN GITAR", "ANGGOTA TNI");
	$anak2 = new UrutanAnakKedua("TIARA SHERLY", "18", "MEMASAK", "DOKTER", "MAHASISWA");

	echo $anak1->getinfoAnak();
	echo "<br>";
	echo $anak2->getinfoAnak();

  ?>