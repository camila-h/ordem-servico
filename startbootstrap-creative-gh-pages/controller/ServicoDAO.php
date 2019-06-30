<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class ServicoDAO{


	
	public function listar_servico(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM servico';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Carrega um elemento pela chave primária
	public function carregar($CLIENTEID){
		include("../conexao.php");
		$sql = 'SELECT * FROM servico WHERE CLIENTEID = :CLIENTEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":CLIENTEID",$CLIENTEID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
		public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM servico';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	} 

	public function listarAceitos($cod){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM servico WHERE TECID = '.$cod;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	} 


		public function listarPendentes(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM servico WHERE STATUS = "Pendente"';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	} 
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM servico ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($ID){
		include("../conexao.php");
		$sql = 'DELETE FROM servico WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		header('location:../view/CadastrarProbView.php');

		if($consulta->execute()){
			return true;
		}
		else{
			return false;
		}
	}
	
	//Insere um elemento na tabela
	public function inserir($servico){
		include("../config/conexao.php");
		$sql = 'INSERT INTO servico (PRODUTO, DESCRICAO, PROBLEMA, CLIENTEID, STATUS) VALUES ( :PRODUTO, :DESCRICAO, :PROBLEMA, :CLIENTEID, :STATUS)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':PRODUTO',$servico->getPRODUTO()); 
		$consulta->bindValue(':DESCRICAO',$servico->getDESCRICAO()); 
		$consulta->bindValue(':PROBLEMA',$servico->getPROBLEMA()); 
		$consulta->bindValue(':STATUS',$servico->getSTATUS());
		$consulta->bindValue(':CLIENTEID',$servico->getCLIENTEID());
		header('location:../view/CadastrarProbView.php');

		if($consulta->execute()){
			return true;
		}
		else{
			return false;
		}

	}
	
	//Atualiza um elemento na tabela
	public function atualizar($servico){
		include("../config/conexao.php");
		$sql = 'UPDATE servico SET PRODUTO = :PRODUTO, DESCRICAO = :DESCRICAO, PROBLEMA = :PROBLEMA, ID = :ID WHERE ID = :ID';
		$consulta = $conexao->prepare($sql); 
		$consulta->bindValue(':PRODUTO',$servico->getPRODUTO()); 
		$consulta->bindValue(':DESCRICAO',$servico->getDESCRICAO()); 
		$consulta->bindValue(':PROBLEMA',$servico->getPROBLEMA());  
		$consulta->bindValue(':ID',$servico->getID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function editar($servico){
		include("../config/conexao.php");
		$sql = 'UPDATE servico SET PRODUTO = :PRODUTO, DESCRICAO = :DESCRICAO, PROBLEMA = :PROBLEMA WHERE ID = :ID';
		$consulta = $conexao->prepare($sql); 
		$consulta->bindValue(':PRODUTO',$servico->getPRODUTO()); 
		$consulta->bindValue(':DESCRICAO',$servico->getDESCRICAO()); 
		$consulta->bindValue(':PROBLEMA',$servico->getPROBLEMA());  
		$consulta->bindValue(':ID',$servico->getID());
		if($consulta->execute())
					header('location:../view/CadastrarProbView.php');
		else
			return false;
	}

	public function editarTec($servicoTec){
		include("../config/conexao.php");
		$sql = 'UPDATE servico SET DATA = :DATA, HORA = :HORA, STATUS = :STATUS, TECID = :TECID WHERE ID = :ID';
		$consulta = $conexao->prepare($sql); 
		$consulta->bindValue(':DATA',$servicoTec->getDATA()); 
		$consulta->bindValue(':HORA',$servicoTec->getHORA()); 
		$consulta->bindValue(':STATUS',$servicoTec->getSTATUS()); 
		$consulta->bindValue(':TECID',$servicoTec->getTECID()); 
		$consulta->bindValue(':ID',$servicoTec->getID());
		if($consulta->execute())
					header('location:../view/servicosTec.php');
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM servico';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>
