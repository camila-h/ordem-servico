<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class EmpresaDAO{

	//Carrega um elemento pela chave primária
	public function carregar($ID){
		include("conexao.php");
		$sql = 'SELECT * FROM empresa WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM empresa';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM empresa ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($ID){
		include("conexao.php");
		$sql = 'DELETE FROM empresa WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($empresa){
		include("conexao.php");
		$sql = 'INSERT INTO empresa (CNPJ, ID, SLOGAN, NOME, CEP, BAIRRO, RUA, NUMERO, CELULAR) VALUES (:CNPJ, :ID, :SLOGAN, :NOME, :CEP, :BAIRRO, :RUA, :NUMERO, :CELULAR)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':CNPJ',$empresa->getCNPJ()); 
		$consulta->bindValue(':ID',$empresa->getID()); 
		$consulta->bindValue(':SLOGAN',$empresa->getSLOGAN()); 
		$consulta->bindValue(':NOME',$empresa->getNOME()); 
		$consulta->bindValue(':CEP',$empresa->getCEP()); 
		$consulta->bindValue(':BAIRRO',$empresa->getBAIRRO()); 
		$consulta->bindValue(':RUA',$empresa->getRUA()); 
		$consulta->bindValue(':NUMERO',$empresa->getNUMERO()); 
		$consulta->bindValue(':CELULAR',$empresa->getCELULAR()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($empresa){
		include("conexao.php");
		$sql = 'UPDATE empresa SET CNPJ = :CNPJ, ID = :ID, SLOGAN = :SLOGAN, NOME = :NOME, CEP = :CEP, BAIRRO = :BAIRRO, RUA = :RUA, NUMERO = :NUMERO, CELULAR = :CELULAR WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':CNPJ',$empresa->getCNPJ()); 
		$consulta->bindValue(':ID',$empresa->getID()); 
		$consulta->bindValue(':SLOGAN',$empresa->getSLOGAN()); 
		$consulta->bindValue(':NOME',$empresa->getNOME()); 
		$consulta->bindValue(':CEP',$empresa->getCEP()); 
		$consulta->bindValue(':BAIRRO',$empresa->getBAIRRO()); 
		$consulta->bindValue(':RUA',$empresa->getRUA()); 
		$consulta->bindValue(':NUMERO',$empresa->getNUMERO()); 
		$consulta->bindValue(':CELULAR',$empresa->getCELULAR()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM empresa';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>