<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Pós incrementos</h3>
	<?php 
		$a=1;

		echo "Valor após o incremento: " . $a++ . '<br />';
		echo 'Valor atualizado: ' .$a . '<br />';
		
	?>

	<h3>Pre incrementos</h3>
	<?php 
		$a=1;

		echo "Valor pré incremento: " . ++$a . '<br />';
		echo 'Valor atualizado: ' .$a . '<br />';
	    
	?>

	<h3>Pós incrementos</h3>
	<?php 
		$a=1;

		echo "Valor após o incremento: " . $a-- . '<br />';
		echo 'Valor atualizado: ' .$a . '<br />';
		
	?>

	<h3>Pre incrementos</h3>
	<?php 
		$a=1;

		echo "Valor pré incremento: " . --$a . '<br />';
		echo 'Valor atualizado: ' .$a . '<br />';
	    
	?>
</body>
</html>