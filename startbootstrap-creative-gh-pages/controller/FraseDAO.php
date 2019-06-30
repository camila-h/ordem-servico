<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class FraseDAO{

	//Carrega um elemento pela chave primária
	public function carregar($ID){
		include("conexao.php");
		$sql = 'SELECT * FROM frases WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM frases';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM frases ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($ID){
		include("conexao.php");
		$sql = 'DELETE FROM frases WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($frase){
		include("conexao.php");
		$sql = 'INSERT INTO frases (ADMINID, ID) VALUES (:ADMINID, :ID)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':ADMINID',$frase->getADMINID()); 
		$consulta->bindValue(':ID',$frase->getID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($frase){
		include("conexao.php");
		$sql = 'UPDATE frases SET ADMINID = :ADMINID, ID = :ID WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':ADMINID',$frase->getADMINID()); 
		$consulta->bindValue(':ID',$frase->getID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM frases';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>