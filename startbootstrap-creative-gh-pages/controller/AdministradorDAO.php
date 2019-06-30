<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class AdministradorDAO{

	//Carrega um elemento pela chave primária
	public function carregar($ID){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM administrador WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM administrador';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM administrador ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($ID){
		include("conexao.php");
		$sql = 'DELETE FROM administrador WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($administrador){
		include("conexao.php");
		$sql = 'INSERT INTO administrador (NOME, ID, CELULAR, EMAIL) VALUES (:NOME, :ID, :CELULAR, :EMAIL)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':NOME',$administrador->getNOME()); 
		$consulta->bindValue(':ID',$administrador->getID()); 
		$consulta->bindValue(':CELULAR',$administrador->getCELULAR()); 
		$consulta->bindValue(':EMAIL',$administrador->getEMAIL()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($administrador){
		include("../config/conexao.php");
		$sql = 'UPDATE administrador SET NOME = :NOME, CELULAR = :CELULAR, EMAIL = :EMAIL, LOGIN=:LOGIN WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':NOME',$administrador->getNOME()); 
		$consulta->bindValue(':LOGIN',$administrador->getLOGIN()); 
		$consulta->bindValue(':ID',$administrador->getID()); 
		$consulta->bindValue(':CELULAR',$administrador->getCELULAR()); 
		$consulta->bindValue(':EMAIL',$administrador->getEMAIL()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM administrador';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	public function logarAdm($administrador){
		include("config/conexao.php");
		$sql = 'SELECT * FROM administrador WHERE LOGIN =:LOGIN AND SENHA=:SENHA';
		$logarAdm = $conexao->prepare($sql);
		$logarAdm->bindValue(":LOGIN",$administrador->getLOGIN());
		$logarAdm->bindValue(":SENHA",$administrador->getSENHA());
		$logarAdm->execute();
		return ($logarAdm->fetchAll(PDO::FETCH_ASSOC));
	}
}
?>