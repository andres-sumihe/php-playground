<?php 
	class kst{
		//Atribut
		public $listKst = [
			[
			 "kode" => "001", 
			 "hari" => "Senin", 
			 "jam" => "09.00 - 11.00", 
			 "matakuliah" => "Kewarganegaraan", 
			 "dosen" => "Wartoyo"
			],
			[
			 "kode" => "002", 
			 "hari" => "Selasa", 
			 "jam" => "07.00 - 10.00", 
			 "matakuliah" => "Pemodelan", 
			 "dosen" => "Yulianto"
			],
			[
			 "kode" => "003", 
			 "hari" => "Rabu", 
			 "jam" => "16.00 - 18.00", 
			 "matakuliah" => "Matematika", 
			 "dosen" => "Suprihadi"
			],
			[
			 "kode" => "004", 
			 "hari" => "Kamis", 
			 "jam" => "09.00 - 11.00", 
			 "matakuliah" => "Basis Data", 
			 "dosen" => "Adi Nugroho"
			]
		];

		//Method
		public function getAll_KST(){
			return $this->listKst;
		}

		public function getDetail($kode){
			for($i=0; $i < count($this->listKst); $i++) { 
				$hari;
				$jam;
				$matakuliah;
				$dosen;
				if ($this->listKst[$i]["kode"] == $kode) {
					$hari =  $this->listKst[$i]["hari"];
					$jam =  $this->listKst[$i]["jam"];
					$matakuliah =  $this->listKst[$i]["matakuliah"];
					$dosen =  $this->listKst[$i]["dosen"];
					$detailkst = array('hari' => $hari, 
									   'jam' => $jam,
									   'matakuliah' => $matakuliah,
									   'dosen' => $dosen
									);
					return $detailkst; 
				}
			}
		}
	}
 ?>