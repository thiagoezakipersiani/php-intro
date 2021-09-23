<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	   <title>Teste PHP</title>
   </head>
    <body>
    	
        <?php  
            //nome
            $nome='Thiago';

            //idade
            $idade=24;

            //gosta de ler
            $gosta_ler=true;

            //valida se gosta de ler e atribui um valor
            if ($gosta_ler) {
                $ler='gosta';
            }else {
                $ler='não gosta';
            }

            //para concatenar precisa usar o .

            echo 'Ola '. $nome . ', vimos que você tem '. $idade . ' e que você '.$ler .' de ler ';
        ?>
        <br/>
        
    </body>
</html>