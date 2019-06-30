<?php

	/* @Autor: Dalker Pinheiro
	   Classe DAO */
	   
class CorpoDAO{

	//Carrega um elemento pela chave primária
	public function carregar($FRASEID){
		include("conexao.php");
		$sql = 'SELECT * FROM corpo WHERE FRASEID = :FRASEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":FRASEID",$FRASEID);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}

	//Lista todos os elementos da tabela
	public function listarTodos(){
		include("conexao.php");
		$sql = 'SELECT * FROM corpo';
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Lista todos os elementos da tabela listando ordenados por uma coluna específica
	public function listarTodosOrgenandoPor($coluna){
		include("conexao.php");
		$sql = 'SELECT * FROM corpo ORDER BY '.$coluna;
		$consulta = $conexao->prepare($sql);
		$consulta->execute();
		return ($consulta->fetchAll(PDO::FETCH_ASSOC));
	}
	
	//Apaga um elemento da tabela
	public function deletar($FRASEID){
		include("conexao.php");
		$sql = 'DELETE FROM corpo WHERE FRASEID = :FRASEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(":FRASEID",$FRASEID);
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Insere um elemento na tabela
	public function inserir($corpo){
		include("conexao.php");
		$sql = 'INSERT INTO corpo (FRASE11, FRASE12, FRASE13, FRASE14, FRASE15, FRASE16, FRASE17, FRASE18, FRASE19, FRASE20, FRASE21, FRASE22, FRASE23, FRASE24, FRASE25, FRASE26, FRASE27, FRASE28, FRASE29, FRASE30, FRASE31, FRASE32, FRASE33, FRASE34, FRASE35, FRASE36, FRASE37, FRASEID) VALUES (:FRASE11, :FRASE12, :FRASE13, :FRASE14, :FRASE15, :FRASE16, :FRASE17, :FRASE18, :FRASE19, :FRASE20, :FRASE21, :FRASE22, :FRASE23, :FRASE24, :FRASE25, :FRASE26, :FRASE27, :FRASE28, :FRASE29, :FRASE30, :FRASE31, :FRASE32, :FRASE33, :FRASE34, :FRASE35, :FRASE36, :FRASE37, :FRASEID)';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':FRASE11',$corpo->getFRASE11()); 
		$consulta->bindValue(':FRASE12',$corpo->getFRASE12()); 
		$consulta->bindValue(':FRASE13',$corpo->getFRASE13()); 
		$consulta->bindValue(':FRASE14',$corpo->getFRASE14()); 
		$consulta->bindValue(':FRASE15',$corpo->getFRASE15()); 
		$consulta->bindValue(':FRASE16',$corpo->getFRASE16()); 
		$consulta->bindValue(':FRASE17',$corpo->getFRASE17()); 
		$consulta->bindValue(':FRASE18',$corpo->getFRASE18()); 
		$consulta->bindValue(':FRASE19',$corpo->getFRASE19()); 
		$consulta->bindValue(':FRASE20',$corpo->getFRASE20()); 
		$consulta->bindValue(':FRASE21',$corpo->getFRASE21()); 
		$consulta->bindValue(':FRASE22',$corpo->getFRASE22()); 
		$consulta->bindValue(':FRASE23',$corpo->getFRASE23()); 
		$consulta->bindValue(':FRASE24',$corpo->getFRASE24()); 
		$consulta->bindValue(':FRASE25',$corpo->getFRASE25()); 
		$consulta->bindValue(':FRASE26',$corpo->getFRASE26()); 
		$consulta->bindValue(':FRASE27',$corpo->getFRASE27()); 
		$consulta->bindValue(':FRASE28',$corpo->getFRASE28()); 
		$consulta->bindValue(':FRASE29',$corpo->getFRASE29()); 
		$consulta->bindValue(':FRASE30',$corpo->getFRASE30()); 
		$consulta->bindValue(':FRASE31',$corpo->getFRASE31()); 
		$consulta->bindValue(':FRASE32',$corpo->getFRASE32()); 
		$consulta->bindValue(':FRASE33',$corpo->getFRASE33()); 
		$consulta->bindValue(':FRASE34',$corpo->getFRASE34()); 
		$consulta->bindValue(':FRASE35',$corpo->getFRASE35()); 
		$consulta->bindValue(':FRASE36',$corpo->getFRASE36()); 
		$consulta->bindValue(':FRASE37',$corpo->getFRASE37()); 
		$consulta->bindValue(':FRASEID',$corpo->getFRASEID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}
	
	//Atualiza um elemento na tabela
	public function atualizar($corpo){
		include("conexao.php");
		$sql = 'UPDATE corpo SET FRASE11 = :FRASE11, FRASE12 = :FRASE12, FRASE13 = :FRASE13, FRASE14 = :FRASE14, FRASE15 = :FRASE15, FRASE16 = :FRASE16, FRASE17 = :FRASE17, FRASE18 = :FRASE18, FRASE19 = :FRASE19, FRASE20 = :FRASE20, FRASE21 = :FRASE21, FRASE22 = :FRASE22, FRASE23 = :FRASE23, FRASE24 = :FRASE24, FRASE25 = :FRASE25, FRASE26 = :FRASE26, FRASE27 = :FRASE27, FRASE28 = :FRASE28, FRASE29 = :FRASE29, FRASE30 = :FRASE30, FRASE31 = :FRASE31, FRASE32 = :FRASE32, FRASE33 = :FRASE33, FRASE34 = :FRASE34, FRASE35 = :FRASE35, FRASE36 = :FRASE36, FRASE37 = :FRASE37, FRASEID = :FRASEID WHERE FRASEID = :FRASEID';
		$consulta = $conexao->prepare($sql);
		$consulta->bindValue(':FRASE11',$corpo->getFRASE11()); 
		$consulta->bindValue(':FRASE12',$corpo->getFRASE12()); 
		$consulta->bindValue(':FRASE13',$corpo->getFRASE13()); 
		$consulta->bindValue(':FRASE14',$corpo->getFRASE14()); 
		$consulta->bindValue(':FRASE15',$corpo->getFRASE15()); 
		$consulta->bindValue(':FRASE16',$corpo->getFRASE16()); 
		$consulta->bindValue(':FRASE17',$corpo->getFRASE17()); 
		$consulta->bindValue(':FRASE18',$corpo->getFRASE18()); 
		$consulta->bindValue(':FRASE19',$corpo->getFRASE19()); 
		$consulta->bindValue(':FRASE20',$corpo->getFRASE20()); 
		$consulta->bindValue(':FRASE21',$corpo->getFRASE21()); 
		$consulta->bindValue(':FRASE22',$corpo->getFRASE22()); 
		$consulta->bindValue(':FRASE23',$corpo->getFRASE23()); 
		$consulta->bindValue(':FRASE24',$corpo->getFRASE24()); 
		$consulta->bindValue(':FRASE25',$corpo->getFRASE25()); 
		$consulta->bindValue(':FRASE26',$corpo->getFRASE26()); 
		$consulta->bindValue(':FRASE27',$corpo->getFRASE27()); 
		$consulta->bindValue(':FRASE28',$corpo->getFRASE28()); 
		$consulta->bindValue(':FRASE29',$corpo->getFRASE29()); 
		$consulta->bindValue(':FRASE30',$corpo->getFRASE30()); 
		$consulta->bindValue(':FRASE31',$corpo->getFRASE31()); 
		$consulta->bindValue(':FRASE32',$corpo->getFRASE32()); 
		$consulta->bindValue(':FRASE33',$corpo->getFRASE33()); 
		$consulta->bindValue(':FRASE34',$corpo->getFRASE34()); 
		$consulta->bindValue(':FRASE35',$corpo->getFRASE35()); 
		$consulta->bindValue(':FRASE36',$corpo->getFRASE36()); 
		$consulta->bindValue(':FRASE37',$corpo->getFRASE37()); 
		$consulta->bindValue(':FRASEID',$corpo->getFRASEID()); 
		if($consulta->execute())
			return true;
		else
			return false;
	}

	//Apaga todos os elementos da tabela
	public function limparTabela(){
		include("conexao.php");
		$sql = 'DELETE FROM corpo';
		$consulta = $conexao->prepare($sql);
		if($consulta->execute())
			return true;
		else
			return false;
	}
}
?>