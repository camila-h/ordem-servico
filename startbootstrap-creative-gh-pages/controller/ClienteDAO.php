<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class ClienteDAO{

	


	public function pegarLog($login){
		include("config/conexao.php");
		$sql = 'SELECT * FROM cliente WHERE LOGIN = :login';
		$pegar = $conexao->prepare($sql);
		$pegar->bindValue(":login",$login);
		$pegar->execute();
		return ($pegar->fetchAll(PDO::FETCH_ASSOC));
	}

	//Carrega um elemento pela chave primária
	public function carregar($ID){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM cliente WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}


	public function logar($cliente){
		include("config/conexao.php");
		$sql = 'SELECT * FROM cliente WHERE LOGIN = :LOGIN and SENHA = :SENHA';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":LOGIN",$cliente->getLOGIN());
		$consulta->bindValue(":SENHA",$cliente->getSENHA());
		// header('location:../view/CadastrarProbView.php'); 
		if ($consulta->execute()) {
			return $consulta->fetchAll(PDO::FETCH_ASSOC) ;
		}
		else{
			return false;
		}
	}	

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("../config/conexao.php");
		$sql = 'SELECT * FROM cliente';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($clienteid){
		include("../config/conexao.php");
		try {
			$sql = 'SELECT * FROM cliente WHERE ID = '.$clienteid;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			echo $e;
		}
		
	}
	
	//Apaga um elemento da tabela
	public function deletar($ID){
		include("config/conexao.php");
		$sql = 'DELETE FROM cliente WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":ID",$ID);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($cliente){
		include("config/conexao.php");
		$sql = 'INSERT INTO cliente (NOME, LOGIN, SENHA, ID, CEP, RUA, BAIRRO, CELULAR, EMAIL, NUMERO) VALUES (:NOME, :LOGIN, :SENHA, :ID, :CEP, :RUA, :BAIRRO, :CELULAR, :EMAIL, :NUMERO)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':NOME',$cliente->getNOME()); 
		$consulta->bindValue(':LOGIN',$cliente->getLOGIN()); 
		$consulta->bindValue(':SENHA',$cliente->getSENHA()); 
		$consulta->bindValue(':ID',$cliente->getID()); 
		$consulta->bindValue(':CEP',$cliente->getCEP()); 
		$consulta->bindValue(':RUA',$cliente->getRUA()); 
		$consulta->bindValue(':BAIRRO',$cliente->getBAIRRO()); 
		$consulta->bindValue(':CELULAR',$cliente->getCELULAR()); 
		$consulta->bindValue(':EMAIL',$cliente->getEMAIL()); 
		$consulta->bindValue(':NUMERO',$cliente->getNUMERO()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($cliente){
		include("../config/conexao.php");
		$sql = 'UPDATE cliente SET NOME = :NOME, LOGIN = :LOGIN, ID = :ID, CEP = :CEP, RUA = :RUA, BAIRRO = :BAIRRO, CELULAR = :CELULAR, EMAIL = :EMAIL, NUMERO = :NUMERO WHERE ID = :ID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':NOME',$cliente->getNOME()); 
		$consulta->bindValue(':LOGIN',$cliente->getLOGIN()); 
		$consulta->bindValue(':ID',$cliente->getID()); 
		$consulta->bindValue(':CEP',$cliente->getCEP()); 
		$consulta->bindValue(':RUA',$cliente->getRUA()); 
		$consulta->bindValue(':BAIRRO',$cliente->getBAIRRO()); 
		$consulta->bindValue(':CELULAR',$cliente->getCELULAR()); 
		$consulta->bindValue(':EMAIL',$cliente->getEMAIL()); 
		$consulta->bindValue(':NUMERO',$cliente->getNUMERO());
		header('location:../view/CadastrarProbView.php'); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("config/conexao.php");
		$sql = 'DELETE FROM cliente';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>