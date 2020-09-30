<?php 
	for ($i=1; $i <= 50 ; $i++) { 
		echo ($i % 2 == 0) ?  
		"<font style='color: red;font-weight: bold;'>
		$i 
		</font>" 
		: "$i ";	
		echo ($i % 10 == 0) ? "<br>" : "";	
	}
 ?>