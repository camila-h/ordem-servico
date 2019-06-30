<?php
	class cadastrarDAO{

	public function pegarLog($login){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM cliente WHERE LOGIN = :login';
		$pegar = $conexao->prepare($sql);
		$pegar->bindValue(":login",$login);
		$pegar->execute();
		return ($pegar->fetchAll(PDO::FETCH_ASSOC));
	}
	public function inserir($servico){
		include("../config/conexao.php");

		$sql = "INSERT INTO servico (PRODUTO, DESCRICAO, PROBLEMA) VALUES (:PRODUTO, :DESCRICAO, :PROBLEMA)";
		$consulta = $conexao->prepare($sql); 
		$consulta->bindValue(':PRODUTO',$servico->getPRODUTO()); 
		$consulta->bindValue(':DESCRICAO',$servico->getDESCRICAO()); 
		$consulta->bindValue(':PROBLEMA',$servico->getPROBLEMA());  
		if($consulta->execute())
			return true;
		else
			return false;
	}
	}



?>