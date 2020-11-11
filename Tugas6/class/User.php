<?php 
	class user{
		//Atribut
		public $akunUser = [
			["nim" => "672018112", "password" => "1234", "nama" => "Sean Alessandro Pattirane"],
			["nim" => "672018113", "password" => "2345", "nama" => "Adam Belo Paembonan"],
			["nim" => "672018115", "password" => "3456", "nama" => "Farrell Giovanno Tanujaya"],
			["nim" => "672018136", "password" => "0512", "nama" => "Andres Freixa Sumihe"]
		];

		//Method
		public function cekLogin($nimUser, $passwordUser){
			for ($i=0; $i < count($this->akunUser); $i++) { 
				if ($this->akunUser[$i]["nim"] == $nimUser && $this->akunUser[$i]["password"] == $passwordUser) {
					session_id("session1");
					session_start();
					$_SESSION["nim"] = $nimUser;
					session_write_close();
					return header("Location: ../view/KST.php");	
				}

			}
		}

		public function getNama_nim($nim){
			for($i=0; $i < count($this->akunUser); $i++) { 
				$namaUser;
				if ($this->akunUser[$i]["nim"] == $nim) {
					$namaUser =  $this->akunUser[$i]["nama"];
					return $namaUser;
				}
			}
		}
	}
	
 ?>