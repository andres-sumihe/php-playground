<style type="text/css">
	div.rapi{
		display: inline;
		font-weight: bold;
	}
	.rapi1{padding-left: 20px;}
	.rapi2{padding-left: 72px;}
	.rapi3{padding-left: 74.5px;}
	.rapi4{padding-left: 63px;}
</style>
<?php 
	include '../class/KST.php';
	include '../class/User.php';
	$ku = new user();
	$kk = new kst();
	session_id("session1");
	session_start();
	$nim = $_SESSION["nim"];
	session_write_close();
	if (isset($_GET['kode'])) {
		$kode = $_GET['kode'];
	}

	echo "Kartu Studi Tetap<br>";
	echo "<b><i>".$nim."</i>  |  ".$dapatNamaUser = $ku->getNama_nim($nim)."</b>";
	echo "<br><br>";
	$dapatdetail = $kk->getDetail($kode);

	echo "- Mata Kuliah <div class='rapi rapi1'>:</div> ".$dapatdetail["matakuliah"]."<br>"; 
	echo "- Hari <div class='rapi rapi2'>:</div> ".$dapatdetail["hari"]."<br>";
	echo "- Jam <div class='rapi rapi3'>:</div> ".$dapatdetail["jam"]."<br>";
	echo "- Dosen<div class='rapi rapi4'>:</div> ".$dapatdetail["dosen"]."<br><br>";

	echo "<a href='KST.php'><< back</a>";
 ?>
 