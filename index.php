<?
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Inscrição</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="Viewport" content="with=device-with, initial-scandal-1">
</head>
<body>

<p>Formulario para inscrição de competidores</p>
<form action="script.php" method="post">
	<?php 
		$mensagemDeErro=isset($_SESSION['mensagem-de-erro']) ? ($_SESSION['mensagem-de-erro']) : '';
		if (!empty($mensagemDeErro)) {
			echo $mensagemDeErro;
		}

		$mensagemDeSucesso=isset($_SESSION['mensagem-de-sucesso']) ? ($_SESSION['mensagem-de-sucesso']) : '';
		if (!empty($mensagemDeErro)) {
			echo $mensagemDeSucesso;
		}
		
	  ?>
	<p>Seu nome: <input type="text" name="nome"/></p>
	<p>Sua idade: <input type="text" name="idade"/></p>
	<p><input type="submit" value="Enviar dados" /></p> 
</form>
</body>
</html>