<?php

function defineCategoriaCompetidor(string $nome, string $idade)
{
        $categorias=[];
        $categorias[]='Infantil';
        $categorias[]='Adulto';
        $categorias[]='+18';
  if (validarNome($nome) && validarIdade($idade)) 
    {
    	removerMensagemErro();
    	if ($idade >= 6 && $idade <=12) {
	      for ($i=0 ; $i < count($categorias) ; $i++) { 
	      if ($categorias[$i] == 'Infantil') {
	   	    setarMensagemSucesso("O nadador de nome " . $nome." está nadando na categoria: " . $categorias[$i]);
	   	    return null;
	          }
	       }
           }elseif($idade >=13 && $idade <=18) {
	      for ($i=0 ; $i < count($categorias) ; $i++) { 
	       if ($categorias[$i] == '+18') {
	   	    setarMensagemSucesso("O nadador de nome " . $nome . "está nadando na categoria: " . $categorias[$i]);
	   	    return null;
	       }
	      }
         }else{
	        for ($i=0 ; $i < count($categorias) ; $i++) { 
	          if ($categorias[$i] == 'Adulto') {
	       	 setarMensagemSucesso("O nadador de nome " . $nome . "está nadando na categoria: " . $categorias[$i]);
	       	 return null;
	            }
	       }
           }
    } else{
       removerMensagemSucesso();
   	   return obterMensagemErro();
    }
}
?>