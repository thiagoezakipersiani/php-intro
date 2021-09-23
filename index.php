<?php 
$categorias=[];
$categorias[]='Infantil';
$categorias[]='Adulto';
$categorias[]='+18';

$nome='Joao';
$idade=18;

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <=12) {
	for ($i=0 ; $i < count($categorias) ; $i++) { 
	   if ($categorias[$i] == 'Infantil') {
	   	 echo "O nadador de nome " . $nome . " está nadando na categoria: " . $categorias[$i];
	   }
	}
}elseif($idade >=13 && $idade <=18) {
	for ($i=0 ; $i < count($categorias) ; $i++) { 
	   if ($categorias[$i] == '+18') {
	   	 echo "O nadador de nome " . $nome . " está nadando na categoria:" . $categorias[$i];
	   }
	}
}else{
	for ($i=0 ; $i < count($categorias) ; $i++) { 
	   if ($categorias[$i] == 'Adulto') {
	   	 echo "O nadador de nome " . $nome . " está nadando na categoria:" . $categorias[$i];
	   }
	}
}

?>