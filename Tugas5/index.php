<?php 
    session_start();
    if(isset($_SESSION['login']) && $_SESSION['login']){
        echo "Selamat Datang ".$_SESSION["username"]." [<a href='logout.php'>Logout</a>]";
    } else header('location: login.php');
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>RMK Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<style type="text/css">
	body{font-family: Calibri;}
	td.th {
		border-bottom: 1px solid white;
		background-color: #3F72C1;
		color: white;
		font-weight: bold;
	}

	td.th1 {padding : 1px  61px 1px 2px; }
	td.th2 {padding : 1px  60px 1px 2px; }
	td.th3 {padding : 1px  59px 1px 2px; }
	table, tr, td{
		border-collapse: border;
		font-family: 'Times New Roman', Times, serif;
	}
	td.odd {background-color: #CDD7EA; }
	td.even {background-color: #E8EBF3; }
</style>
<body>
<?php 
		$matakuliah = [
					["kode" => "A001", 
					 "name" => "Pemrograman Web"
					], 
					["kode" => "A002", 
					 "name" => "Pemrograman Service"
					], 
					["kode" => "A003",
					 "name" => "Desain Interface"
					], 
					["kode" => "A004", 
					 "name" => "Manajemen Database"] 
				  ];
        ?>
        
		<form method='post' action='proccess.php'>
            <br>Silahkan Pilih Mata Kuliah : 
            <table>
			<tr>
			<td class='th1 th'>Kode</td>
			<td class='th2 th'>Mata Kuliah</td>
			<td class='th3 th'>Pilih</td>
			</tr>
        
            <?php 	foreach ($matakuliah as $key=>$value) { 
				 $no = $key; 
				 if($no % 2 == 1){ ?>
					<tr>
					<td class='odd'><?php echo $value['kode']; ?></td>
					<td class='odd'><?php echo $value['name']; ?></td>
					<?php $helpvalue = $value["kode"].",".$value["name"];?>
					<td class='odd'><input type='checkbox' name='data[]' value='<?php echo $helpvalue;?>'></td>
					</tr>
				<?php }else{ ?>
					<tr>
					<td class='even'><?php echo $value['kode']; ?></td>
					<td class='even'><?php echo $value['name'];?></td>
					<?php $helpvalue = $value["kode"].",".$value["name"];?>
					<td class='even'><input type='checkbox' name='data[]' value='<?php echo $helpvalue;?>'></td>
					</tr>
				<?php }	?>
			<?php }?>
		</table>	
        <br>
        
	</form>
    <a href="#" id="submit">Next </a>	
 	<script>
         $("#submit").click(function(){
            $("form").submit()
        })
     </script>
</body>
</html>
