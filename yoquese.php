<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php
	 $var_uno = 6; 
	 $var_dos = 1; 
	 $var_resul = $var_uno + $var_dos;
	 
	 echo "La suma es $var_resul";
	?>

	<br>
	
	<?php $a = 1; ?>

	<?php echo "1" == $a; ?> 
	<br><br>

	<?php 

		echo $_SERVER['PHP_SELF'];

		echo "<br>";

		echo $_SERVER['SERVER_ADDR'];

		echo "<br>";

		echo $_SERVER['SERVER_NAME'];

		echo "<br>";

		echo $_SERVER['DOCUMENT_ROOT'];

		echo "<br>";
		
		echo $_SERVER['REMOTE_ADDR'];

		echo "<br>";

		echo $_SERVER['REQUEST_METHOD'];

	?>

	<?php

		echo "Estoy creando mi primer archivo de un repositorio";

	?>

</body>
</html>