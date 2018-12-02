



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
		
		numero aleatorio:<input type="text" name="numale"/><br><br><br>
		numero de puntos por arista: <input type="text" name="numaris"/><br><br><br>
		<input type="submit" name="boton">
		


	</form>


	<?php

	if (empty($_POST["numaris"])) {
		# code...
		$num=0;
	}else $num = $_POST["numaris"];

	if (empty($_POST["numale"])) {
		# code...
		$sum=0;
	}else $sum = $_POST["numale"];

	
	
	$arr = array();
	$arr[0] = array(array(array())); 


	for ($i=0; $i < $num; $i++) { 
    	for ($ie=0; $ie < $num; $ie++) { 
        	for ($ia=0; $ia < $num; $ia++) { 
            	if (empty($sum)) {
            		$arr[$i][$ie][$ia]=rand(1-9);
            	}else $arr[$i][$ie][$ia] = 1;
	        }
    	}
	}

	for ($i=0; $i < $num; $i++) { 
    	for ($ie=0; $ie < $num; $ie++) { 
        	for ($ia=0; $ia < $num; $ia++) { 
            	$sum += $arr[$i][$ie][$ia];
        	}
    	}
	}

	echo $sum;

	?>
</body>
</html>