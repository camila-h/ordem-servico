<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class TecnicoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($ID){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM tecnico WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM tecnico';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM tecnico ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($ID){
		include("../config/conexao.php");
		$sql = 'DELETE FROM tecnico WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		header('location:../view/visualizarTec.php');
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($tecnico){
		include("../config/conexao.php");
		$sql = 'INSERT INTO tecnico (SENHA, LOGIN, NOME, ESPECIALIDADE, ID, EMAIL, CELULAR, EMPID) VALUES (:SENHA, :LOGIN, :NOME, :ESPECIALIDADE, :ID, :EMAIL, :CELULAR, :EMPID)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':SENHA',$tecnico->getSENHA()); 
		$consulta->bindValue(':LOGIN',$tecnico->getLOGIN()); 
		$consulta->bindValue(':NOME',$tecnico->getNOME()); 
		$consulta->bindValue(':ESPECIALIDADE',$tecnico->getESPECIALIDADE()); 
		$consulta->bindValue(':ID',$tecnico->getID()); 
		$consulta->bindValue(':EMAIL',$tecnico->getEMAIL()); 
		$consulta->bindValue(':CELULAR',$tecnico->getCELULAR()); 
		$consulta->bindValue(':EMPID',$tecnico->getEMPID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($tecnico){
		include("conexao.php");
		$sql = 'UPDATE tecnico SET SENHA = :SENHA, LOGIN = :LOGIN, NOME = :NOME, ESPECIALIDADE = :ESPECIALIDADE, ID = :ID, EMAIL = :EMAIL, CELULAR = :CELULAR, EMPID = :EMPID WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':SENHA',$tecnico->getSENHA()); 
		$consulta->bindValue(':LOGIN',$tecnico->getLOGIN()); 
		$consulta->bindValue(':NOME',$tecnico->getNOME()); 
		$consulta->bindValue(':ESPECIALIDADE',$tecnico->getESPECIALIDADE()); 
		$consulta->bindValue(':ID',$tecnico->getID()); 
		$consulta->bindValue(':EMAIL',$tecnico->getEMAIL()); 
		$consulta->bindValue(':CELULAR',$tecnico->getCELULAR()); 
		$consulta->bindValue(':EMPID',$tecnico->getEMPID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}


	//Edita informações

	public function editar($tecnico){
		include("../config/conexao.php");
		$sql = 'UPDATE tecnico SET NOME = :NOME, EMAIL = :EMAIL, CELULAR = :CELULAR, LOGIN = :LOGIN, SENHA = :SENHA WHERE ID = :ID';
		$consulta = $conexao->prepare($sql); 
		$consulta->bindValue(':NOME',$tecnico->getNOME()); 
		$consulta->bindValue(':EMAIL',$tecnico->getEMAIL()); 
		$consulta->bindValue(':CELULAR',$tecnico->getCELULAR());	
		$consulta->bindValue(':LOGIN',$tecnico->getLOGIN());  
		$consulta->bindValue(':SENHA',$tecnico->getSENHA());
		$consulta->bindValue(':ID',$tecnico->getID());
		if($consulta->execute())
					header('location:../view/visualizarTec.php');
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM tecnico';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}

	public function logarTec($tecnico){
		include("config/conexao.php");
		$sql = 'SELECT * FROM tecnico WHERE LOGIN =:LOGIN AND SENHA=:SENHA';
		$logarTec = $conexao->prepare($sql);
		$logarTec->bindValue(":LOGIN",$tecnico->getLOGIN());
		$logarTec->bindValue(":SENHA",$tecnico->getSENHA());
		$logarTec->execute();
		return ($logarTec->fetchAll(PDO::FETCH_ASSOC));
	}
}
?>