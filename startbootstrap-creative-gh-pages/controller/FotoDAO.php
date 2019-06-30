<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class FotoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($ID){
		include("conexao.php");
		$sql = 'SELECT * FROM fotos WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM fotos';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM fotos ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($ID){
		include("conexao.php");
		$sql = 'DELETE FROM fotos WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($foto){
		include("conexao.php");
		$sql = 'INSERT INTO fotos (IMG1, IMG2, IMG3, IMG4, IMG5, IMG6, IMG7, ID) VALUES (:IMG1, :IMG2, :IMG3, :IMG4, :IMG5, :IMG6, :IMG7, :ID)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':IMG1',$foto->getIMG1()); 
		$consulta->bindValue(':IMG2',$foto->getIMG2()); 
		$consulta->bindValue(':IMG3',$foto->getIMG3()); 
		$consulta->bindValue(':IMG4',$foto->getIMG4()); 
		$consulta->bindValue(':IMG5',$foto->getIMG5()); 
		$consulta->bindValue(':IMG6',$foto->getIMG6()); 
		$consulta->bindValue(':IMG7',$foto->getIMG7()); 
		$consulta->bindValue(':ID',$foto->getID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($foto){
		include("conexao.php");
		$sql = 'UPDATE fotos SET IMG1 = :IMG1, IMG2 = :IMG2, IMG3 = :IMG3, IMG4 = :IMG4, IMG5 = :IMG5, IMG6 = :IMG6, IMG7 = :IMG7, ID = :ID WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':IMG1',$foto->getIMG1()); 
		$consulta->bindValue(':IMG2',$foto->getIMG2()); 
		$consulta->bindValue(':IMG3',$foto->getIMG3()); 
		$consulta->bindValue(':IMG4',$foto->getIMG4()); 
		$consulta->bindValue(':IMG5',$foto->getIMG5()); 
		$consulta->bindValue(':IMG6',$foto->getIMG6()); 
		$consulta->bindValue(':IMG7',$foto->getIMG7()); 
		$consulta->bindValue(':ID',$foto->getID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM fotos';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>