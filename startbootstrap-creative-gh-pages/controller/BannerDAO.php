<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class BannerDAO{

	//Carrega um elemento pela chave primária
	public function carregar($FRASEID){
		include("conexao.php");
		$sql = 'SELECT * FROM banner WHERE FRASEID = :FRASEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":FRASEID",$FRASEID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM banner';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM banner ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($FRASEID){
		include("conexao.php");
		$sql = 'DELETE FROM banner WHERE FRASEID = :FRASEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":FRASEID",$FRASEID);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($banner){
		include("conexao.php");
		$sql = 'INSERT INTO banner (FRASE1, FRASE2, FRASE3, FRASE4, FRASE5, FRASE6, FRASE7, FRASE8, FRASE9, FRASE10, FRASEID) VALUES (:FRASE1, :FRASE2, :FRASE3, :FRASE4, :FRASE5, :FRASE6, :FRASE7, :FRASE8, :FRASE9, :FRASE10, :FRASEID)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':FRASE1',$banner->getFRASE1()); 
		$consulta->bindValue(':FRASE2',$banner->getFRASE2()); 
		$consulta->bindValue(':FRASE3',$banner->getFRASE3()); 
		$consulta->bindValue(':FRASE4',$banner->getFRASE4()); 
		$consulta->bindValue(':FRASE5',$banner->getFRASE5()); 
		$consulta->bindValue(':FRASE6',$banner->getFRASE6()); 
		$consulta->bindValue(':FRASE7',$banner->getFRASE7()); 
		$consulta->bindValue(':FRASE8',$banner->getFRASE8()); 
		$consulta->bindValue(':FRASE9',$banner->getFRASE9()); 
		$consulta->bindValue(':FRASE10',$banner->getFRASE10()); 
		$consulta->bindValue(':FRASEID',$banner->getFRASEID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($banner){
		include("conexao.php");
		$sql = 'UPDATE banner SET FRASE1 = :FRASE1, FRASE2 = :FRASE2, FRASE3 = :FRASE3, FRASE4 = :FRASE4, FRASE5 = :FRASE5, FRASE6 = :FRASE6, FRASE7 = :FRASE7, FRASE8 = :FRASE8, FRASE9 = :FRASE9, FRASE10 = :FRASE10, FRASEID = :FRASEID WHERE FRASEID = :FRASEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':FRASE1',$banner->getFRASE1()); 
		$consulta->bindValue(':FRASE2',$banner->getFRASE2()); 
		$consulta->bindValue(':FRASE3',$banner->getFRASE3()); 
		$consulta->bindValue(':FRASE4',$banner->getFRASE4()); 
		$consulta->bindValue(':FRASE5',$banner->getFRASE5()); 
		$consulta->bindValue(':FRASE6',$banner->getFRASE6()); 
		$consulta->bindValue(':FRASE7',$banner->getFRASE7()); 
		$consulta->bindValue(':FRASE8',$banner->getFRASE8()); 
		$consulta->bindValue(':FRASE9',$banner->getFRASE9()); 
		$consulta->bindValue(':FRASE10',$banner->getFRASE10()); 
		$consulta->bindValue(':FRASEID',$banner->getFRASEID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM banner';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>