<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	   <title>Curso PHP</title>
   </head>
    <body>
        <?php
          
        	//Declarando variavel nome
        	$nome='Thiago';

        	//int
        	$idade=24;

        	//flot
        	$peso=75.68;

        	//É do genero masculino (boolean)
        	$eMasculino=true;


        	if ($eMasculino) {
        		$masculino='Sim';
        	}else {
        		$masculino='Não';
        	}
        ?>

        <h1>Ficha cadastral</h1>
    </br>

    <p> Nome: <?= $nome ?></p>
    <p> Idade: <?= $idade ?></p>
    <p> Peso: <?= $peso ?></p>
    <p> Masculino: <?= $masculino ?></p>
    
    </body>
</html>