<?php 
function validarNome(string $nome) : bool
{
if (empty($nome)){
	setarMensagemErro('O nome não pode ser vazio') ;
	return false;
}

else if (strlen($nome) < 3 or strlen($nome) > 40 ) {
	setarMensagemErro('Nome deve conter pelo menos 3 caracteres e no maximo 40 caracteres');
	return false;
}
    return true;
}

  function validarIdade(string $idade) : bool
  {
   if(empty($idade)) {
	setarMensagemErro('Você deve inserir uma idade');
	return false;
    }

    else if (!is_numeric($idade)) {
    setarMensagemErro('Idade invalida, informe um número para a idade');
	return false;
     }

     return true;
}




 ?>