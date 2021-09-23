<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php 

		$num1=12;
		$num2=5;


		echo "A soma dos valores é: " . ($num1+$num2);
		echo '<br/>';
		echo "A subtração dos valores é: " . ($num1-$num2);
		echo '<br/>';
		echo "A multiplicação dos valores é: " . ($num1*$num2);
        echo '<br/>';
		echo "A divisão dos valores é: " . ($num1/$num2);
		echo '<br/>';
		echo "O módulo dos valores é: " . ($num1%$num2);
		echo '<br/>';

		//atribuição de valores

		$num1 += 20;
		echo 'Valor somado: ' . $num1;


		?>
</body>
</html>