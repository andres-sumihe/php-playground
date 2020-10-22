<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
    <link rel="stylesheet" href="style.css">
<body>
<center>

    <form method="post" action=""> 
        <font class="text1">Filter NIM</font> 
        <input type="text" name="nim" class="inputnim">
        <input type="submit" name="submit" value="submit"> 
        
    </form>
    
    <?php 
	if(isset($_POST["submit"])){
        $dataMahasiswa = [
            ["nim" => "001", "nama" => "Adnan", "ipk" => "3.9"],
            ["nim" => "002", "nama" => "Cahyo", "ipk" => "3.8"],
            ["nim" =>"003", "nama" => "Andrew", "ipk" => "3.7"],
            ["nim" =>"004", "nama" => "Dimas", "ipk" => "3.6"],
            ["nim" =>"005", "nama" => "Rachel", "ipk" =>"3.7"],
            ["nim" =>"006", "nama" => "Andres", "ipk" =>"4.0"],
            ["nim" =>"007", "nama" => "Sean", "ipk" =>"3.8"]
        ];
        
		$filter = $_POST["nim"];
        
		echo "<br><br><table>";
		echo "<tr>";
		echo "<td class='th1 thdefault'>No</td>";
		echo "<td class='th2 thdefault'>NIM</td>";
		echo "<td class='th3 thdefault'>Nama</td>";
		echo "<td class='th4 thdefault'>IPK</td>";
		echo "</tr>";
		
		if (strcmp($filter , "") == 0) {
            for ($i=0; $i < count($dataMahasiswa) ; $i++) { 
                $no = $i + 1;
				if($no % 2 == 1){
                    echo "<tr><td class='odd'>".$no."</td>";
					echo "<td class='odd'>".$dataMahasiswa[$i]["nim"]."</td>";
					echo "<td class='odd'>".$dataMahasiswa[$i]["nama"]."</td>";
					echo "<td class='odd'>".$dataMahasiswa[$i]["ipk"]."</td>";	
				}else{
                    echo "<tr><td class='even'>".$no."</td>";
					echo "<td class='even'>".$dataMahasiswa[$i]["nim"]."</td>";
					echo "<td class='even'>".$dataMahasiswa[$i]["nama"]."</td>";
					echo "<td class='even'>".$dataMahasiswa[$i]["ipk"]."</td>";		
				}
				
			}
		}else{
            for ($i=0; $i < count($dataMahasiswa) ; $i++) { 
                if (strcmp($dataMahasiswa[$i]["nim"], $filter) == 0) {
                    echo "<tr><td class='nim'>1</td>";
					echo "<td class='nim'>".$dataMahasiswa[$i]["nim"]."</td>";
					echo "<td class='nim'>".$dataMahasiswa[$i]["nama"]."</td>";
					echo "<td class='nim'>".$dataMahasiswa[$i]["ipk"]."</td>";
				}
			}
		}
		echo "</table>";
	}
    ?>
</center>
</body>
</html>