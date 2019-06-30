<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class RodapeDAO{

	//Carrega um elemento pela chave primária
	public function carregar($FRASEID){
		include("conexao.php");
		$sql = 'SELECT * FROM rodape WHERE FRASEID = :FRASEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":FRASEID",$FRASEID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM rodape';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM rodape ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($FRASEID){
		include("conexao.php");
		$sql = 'DELETE FROM rodape WHERE FRASEID = :FRASEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":FRASEID",$FRASEID);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($rodape){
		include("conexao.php");
		$sql = 'INSERT INTO rodape (FRASE1, FRASE2, FRASE3, FRASE4, FRASE5, FRASE6, FRASE7, FRASE8, FRASEID) VALUES (:FRASE1, :FRASE2, :FRASE3, :FRASE4, :FRASE5, :FRASE6, :FRASE7, :FRASE8, :FRASEID)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':FRASE1',$rodape->getFRASE1()); 
		$consulta->bindValue(':FRASE2',$rodape->getFRASE2()); 
		$consulta->bindValue(':FRASE3',$rodape->getFRASE3()); 
		$consulta->bindValue(':FRASE4',$rodape->getFRASE4()); 
		$consulta->bindValue(':FRASE5',$rodape->getFRASE5()); 
		$consulta->bindValue(':FRASE6',$rodape->getFRASE6()); 
		$consulta->bindValue(':FRASE7',$rodape->getFRASE7()); 
		$consulta->bindValue(':FRASE8',$rodape->getFRASE8()); 
		$consulta->bindValue(':FRASEID',$rodape->getFRASEID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($rodape){
		include("conexao.php");
		$sql = 'UPDATE rodape SET FRASE1 = :FRASE1, FRASE2 = :FRASE2, FRASE3 = :FRASE3, FRASE4 = :FRASE4, FRASE5 = :FRASE5, FRASE6 = :FRASE6, FRASE7 = :FRASE7, FRASE8 = :FRASE8, FRASEID = :FRASEID WHERE FRASEID = :FRASEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':FRASE1',$rodape->getFRASE1()); 
		$consulta->bindValue(':FRASE2',$rodape->getFRASE2()); 
		$consulta->bindValue(':FRASE3',$rodape->getFRASE3()); 
		$consulta->bindValue(':FRASE4',$rodape->getFRASE4()); 
		$consulta->bindValue(':FRASE5',$rodape->getFRASE5()); 
		$consulta->bindValue(':FRASE6',$rodape->getFRASE6()); 
		$consulta->bindValue(':FRASE7',$rodape->getFRASE7()); 
		$consulta->bindValue(':FRASE8',$rodape->getFRASE8()); 
		$consulta->bindValue(':FRASEID',$rodape->getFRASEID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM rodape';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>