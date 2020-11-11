<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	body{font-family: Calibri;}
	th {
		border-bottom: 1px solid white;
		background-color: #3F72C1;
		color: white;
		font-weight: bold;
	}

	.tablehead1 {padding : 1px  61px 1px 2px; }
	.tablehead2 {padding : 1px  60px 1px 2px; }
	.tablehead3 {padding : 1px  59px 1px 2px; }
	.tablehead4 {padding : 1px  61px 1px 2px; }
	.tablehead5 {padding : 1px  60px 1px 2px; }
	.tablehead6 {padding : 1px  59px 1px 2px; }

	table, tr, td{
		border-collapse: border;
		font-family: Calibri;
	}
	td.barisganjil {background-color: #CDD7EA; }
	td.barisgenap {background-color: #E8EBF3; }
</style>
<body>
<?php  
	include '../class/User.php';
	include '../class/KST.php';
	$ku = new user();
	$kk = new kst();

	session_id("session1");
	session_start();
	$nim = $_SESSION["nim"];
	session_write_close();

?>

	<?php 

	echo "Kartu Studi Tetap<br>";
	echo "<b><i>".$nim."</i>  |  ".$dapatNamaUser = $ku->getNama_nim($nim)."</b>";

	$daftarkst = $kk->getAll_KST();

	?>


	<br><br>
	<table>
		<tr>
			<th class='tablehead1'>Kode</th>
			<th class='tablehead2'>Hari</th>
			<th class='tablehead3'>Jam</th>
			<th class='tablehead4'>Mata Kuliah</th>
			<th class='tablehead5'>Dosen</th>
			<th class='tablehead6'>Detail</th>
		</tr>

	<?php
	for ($i=0; $i < count($daftarkst) ; $i++) { 
		$no = $i + 1; ?>
		<tr>
		
		<?php if($no % 2 == 1){ ?>


			<td class='barisganjil'><?php echo $daftarkst[$i]["kode"]; ?></td>
			<td class='barisganjil'><?php echo $daftarkst[$i]["hari"]; ?></td>
			<td class='barisganjil'><?php echo $daftarkst[$i]["jam"]; ?></td>
			<td class='barisganjil'><?php echo $daftarkst[$i]["matakuliah"]; ?></td>
			<td class='barisganjil'><?php echo $daftarkst[$i]["dosen"]; ?></td>
			<?php $kodeMatkul =  $daftarkst[$i]["kode"]; ?>
			<td class='barisganjil'><a href='../view/Detail.php?kode=<?php echo $kodeMatkul?>'>Detail</a></td>
		<?php }else{ ?>
			<td class='barisgenap'><?php echo $daftarkst[$i]["kode"]; ?></td>
			<td class='barisgenap'><?php echo $daftarkst[$i]["hari"]; ?></td>
			<td class='barisgenap'><?php echo $daftarkst[$i]["jam"]; ?></td>
			<td class='barisgenap'><?php echo $daftarkst[$i]["matakuliah"]; ?></td>
			<td class='barisgenap'><?php echo $daftarkst[$i]["dosen"]; ?></td>
			<?php $kodeMatkul =  $daftarkst[$i]["kode"]; ?>
			<td class='barisgenap'><a href='Detail.php?kode=<?php echo $kodeMatkul?>'>Detail</a></td>
		<?php } ?>
		</tr>
	<?php } ?>
	</table>


</body>
</html>
