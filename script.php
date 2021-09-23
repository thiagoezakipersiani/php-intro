<?php 
session_start();

$nome=$_POST["nome"];
$idade=$_POST["idade"];

$categorias=[];
$categorias[]='Infantil';
$categorias[]='Adulto';
$categorias[]='+18';

if (empty($nome)){
	$_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio' ;
	header('location: index.php');
	return;
}

else if (strlen($nome) < 3 or strlen($nome) > 40 ) {
	$_SESSION['mensagem-de-erro'] = 'Nome deve conter pelo menos 3 caracteres e no maximo 40 caracteres';
	header('location: index.php');
	return;
}

else if(empty($idade)) {
	$_SESSION['mensagem-de-erro'] = 'Você deve inserir uma idade';
	header('location: index.php');
	return;
}

else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'Idade invalida, informe um número para a idade';
	header('location: index.php');
	return;
}


if ($idade >= 6 && $idade <=12) {
	for ($i=0 ; $i < count($categorias) ; $i++) { 
	   if ($categorias[$i] == 'Infantil') {
	   	 $_SESSION['mensagem-de-sucesso'] ="O nadador de nome " . $nome." está nadando na categoria: " . $categorias[$i];
	   	 header('location: index.php');
	   	 return;
	   }
	}
}elseif($idade >=13 && $idade <=18) {
	for ($i=0 ; $i < count($categorias) ; $i++) { 
	   if ($categorias[$i] == '+18') {
	   	  $_SESSION['mensagem-de-sucesso'] = "O nadador de nome " . $nome . "está nadando na categoria: " . $categorias[$i];
	   	 header('location: index.php');
	   	 return;
	   }
	}
}else{
	for ($i=0 ; $i < count($categorias) ; $i++) { 
	   if ($categorias[$i] == 'Adulto') {
	   	  $_SESSION['mensagem-de-sucesso'] = "O nadador de nome " . $nome . "está nadando na categoria: " . $categorias[$i];
	   	 header('location: index.php');
	   	 return;
	   }
	}
}

?>