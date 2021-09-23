<?php 

$nome=$_POST["nome"];
$idade=$_POST["idade"];

$categorias=[];
$categorias[]='Infantil';
$categorias[]='Adulto';
$categorias[]='+18';

if (empty($nome)){
	echo "Nome não pode ser vazio";
	return;
}

if (strlen($nome) < 3 or strlen($nome) > 40 ) {
	echo "Nome deve conter pelo menos 3 caracteres e no maximo 40 caracteres ";
	return;
}

if (empty($idade)) {
	echo "Você deve inserir uma idade";
	return;
}

if (!is_numeric($idade)) {
	echo "Idade invalida, informe um número para a idade";
	return;
}


if ($idade >= 6 && $idade <=12) {
	for ($i=0 ; $i < count($categorias) ; $i++) { 
	   if ($categorias[$i] == 'Infantil') {
	   	 echo "O nadador de nome " . $nome." está nadando na categoria: " . $categorias[$i];
	   }
	}
}elseif($idade >=13 && $idade <=18) {
	for ($i=0 ; $i < count($categorias) ; $i++) { 
	   if ($categorias[$i] == '+18') {
	   	 echo "O nadador de nome " . $nome . "está nadando na categoria: " . $categorias[$i];
	   }
	}
}else{
	for ($i=0 ; $i < count($categorias) ; $i++) { 
	   if ($categorias[$i] == 'Adulto') {
	   	 echo "O nadador de nome " . $nome . "está nadando na categoria: " . $categorias[$i];
	   }
	}
}

?>