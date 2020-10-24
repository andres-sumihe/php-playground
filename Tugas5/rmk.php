<?php 
    session_start();
    echo "Nama: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION["username"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='clear' href='logout.php'>[Logout]</a>";
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
		
            <br>Silahkan Pilih Mata Kuliah : 
            <br>
            <a href='destroyData.php' class="clear">clear and << back</a>
            <table>
			<tr>
			<td class='th1 th'>Kode</td>
			<td class='th2 th'>Mata Kuliah</td>
			</tr>
            <?php 
                if(isset($_SESSION["data"]))
                    $data = $_SESSION["data"]
            ?>
            <?php 	foreach ($data as $i =>$value) {  
                $matakuliah = explode(',', $value);
				 if($i % 2 == 1){ ?>
					<tr>
					<td class='odd'><?php echo $matakuliah[0]; ?></td>
					<td class='odd'><?php echo $matakuliah[1]; ?></td>
					</tr>
				<?php }else{ ?>
					<tr>
					<td class='even'><?php echo $matakuliah[0]; ?></td>
					<td class='even'><?php echo $matakuliah[1];?></td>
					</tr>
				<?php }	?>
			<?php }?>
		</table>	
        <br>
        <a href="#" id="next" class="clear">Next </a>	
        <a href="logout.php" id="done" class="done" style="display: none;">Done </a>	
    <script>
        $("#next").click(function(){
           $(".done").css('display','block');
           $(".clear").css('display','none');
        })
    </script>
</body>
</html>
