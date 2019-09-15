<?php
	class Mahasiswa{
		

		public $nim, $nama, $prodi, $asalsma;
		//Property yang ada dalam class//
		public function __construct($nim = "NIM", $nama = "NAMA", $prodi = "PRODI", $asalsma= "Asal SMA"){
			$this->nim = $nim;
			$this->nama = $nama;
			$this->prodi = $prodi;
			$this->asalsma = $asalsma;
			//Method yang automatis dijalankan mengambil data dari property diatas// 
		}
		public function getinfoMahasiswa(){
			$mhs = "NAMA : {$this->nama}, NIM : {$this->nim}, PRODI : {$this->prodi}, Asal SMA : {$this->asalsma}";
			return $mhs;
			//merupakan method dari semua class atau function dalam object//
		}
	}
	class MahasiswaStrataSatu extends Mahasiswa{
		public function getinfoMahasiswa(){
			$mhs = "Mahasiswa S1 : ".parent ::getinfoMahasiswa();
			return $mhs;
			//merupakan class baru yang mewarisi property dan method dari parent//
		}
	}
	class MahasiswaStrataDua extends Mahasiswa{
		public $asalS1;
		public function __construct($nim, $nama, $prodi, $asalsma, $asalS1){
			parent::__construct($nim, $nama, $prodi, $asalsma);
			$this->asalS1 = $asalS1;
			//merupakan class baru yang mewarisi method dari parentnya//
		}
		public function getinfoMahasiswa(){
			$mhs = "Mahasiswa S2 : ".parent::getinfoMahasiswa()." Asal S1 : {$this->asalS1}";
			return $mhs;
		}
	}
	$mahasiswa1 = new MahasiswaStrataSatu("F1G118033", "Muhammad Sunardi", "ilmu komputer", "SMAN 2 TONGKUNO");
	$mahasiswa2 = new MahasiswaStrataDua("F1G118036", "Alif Marjanto", "ilmu komputer", "SMA KARTIKA", "UHO");
	//sebuah object mahasiswa1 dan mahasiswa2 dan datanya akan dikirim//

	echo $mahasiswa1->getinfoMahasiswa();
	echo "<br>";
	echo $mahasiswa2->getinfoMahasiswa();
	//memanggil data dari siswa getinfomahasi//
  ?>