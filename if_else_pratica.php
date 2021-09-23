<html>
    <head>
	    <meta charset="utf-8">
	   <title>Curso PHP</title>
   </head>
    <body>
        <?php 
        
        	$usuario_possui_cartao_loja=true;
        	$valor_compra=90;

        	$valor_frete=50;
        	$recebeu_desconto_frete=true;


        	$valor_frete_aux= $usuario_possui_cartao_loja && $valor_compra >= 200 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 50  ? 25 : $valor_frete));

        	$recebeu_desconto_frete= $valor_frete_aux != $valor_frete ? true : false;
        	$valor_frete=$valor_frete_aux;	
        	
        	/*if ($usuario_possui_cartao_loja && $valor_compra >= 200) {
        		$valor_frete=0;
        	}elseif ($usuario_possui_cartao_loja && $valor_compra >= 100 ) {
        		$valor_frete=10;
        	}elseif ($usuario_possui_cartao_loja && $valor_compra >= 50 ) {
        		$valor_frete=25;
        	}else{
        		$recebeu_desconto_frete=false;
        	}*/
        ?>
    
      <h1>Detalhes Pedidos</h1>

      <p>Possui o cartão da loja?  <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?>
      	<?php 

      	 /*  if ($usuario_possui_cartao_loja) {

      	  	//echo 'Sim';
      	  }
      	  else{
      	  	echo 'Não';
      	  } */

      	?>
      </p>

      <p> Valor Compra: <?= $valor_compra; ?></p>

       <p>Possui desconto no frete?
      	<?= $recebeu_desconto_frete ? 'Sim' : 'Não';
      	?>
      </p>

      <p> Valor frete: <?= $valor_frete; ?></p>

	  <p> Valor total: <?= $valor_frete+$valor_compra; ?></p>      


    </body>
</html>