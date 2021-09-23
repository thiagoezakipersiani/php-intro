<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 		<?php 

 		//Gettype
 		$valor=true;
 		$valor= (string) $valor;

 		echo $valor .' '.gettype($valor);
 		echo '<br/>';		
 		echo $valor.' '.gettype($valor);

 		?>
</body>
</html>