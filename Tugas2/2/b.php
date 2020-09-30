<?php 
	for ($i=25; $i <= 75 ; $i++) { 
		echo ($i % 2 == 0) ? "$i " 
		: "<font style='color: blue;font-weight: bold;'>
		$i </font> " ;	
		echo ($i % 5 == 0) ? "<br>" : "";
	}
 ?>