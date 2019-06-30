<?php 


require_once ("conexao.php");
	$consulta = $pdo->prepare("SELECT PRODUTO, PROBLEMA, DESCRICAO from servico");
	$consulta-> execute();
	$contatos = $consulta-> fetchAll();
	foreach ($servicos as $servico) {
	//	echo $contato ['ID'];
		echo $contato ['PRODUTO'];
		echo $contato ['PROBLEMA'];
		echo $contato ['DESCRICAO'];
		echo ("</br>");
	}

?>