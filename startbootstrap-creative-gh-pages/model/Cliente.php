<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Cliente{
		//Atributos
		private $NOME;
 		private $LOGIN;
 		private $SENHA;
 		private $ID;
 		private $CEP;
 		private $RUA;
 		private $BAIRRO;
 		private $CELULAR;
 		private $EMAIL;
 		private $NUMERO;
 				
		//Métodos Getters e Setters
		public function getNOME(){
			return $this->NOME;
		}
		public function getLOGIN(){
			return $this->LOGIN;
		}
		public function getSENHA(){
			return $this->SENHA;
		}
		public function getID(){
			return $this->ID;
		}
		public function getCEP(){
			return $this->CEP;
		}
		public function getRUA(){
			return $this->RUA;
		}
		public function getBAIRRO(){
			return $this->BAIRRO;
		}
		public function getCELULAR(){
			return $this->CELULAR;
		}
		public function getEMAIL(){
			return $this->EMAIL;
		}
		public function getNUMERO(){
			return $this->NUMERO;
		}
		
		public function setNOME($NOME){
			$this->NOME=$NOME;
		}
		public function setLOGIN($LOGIN){
			$this->LOGIN=$LOGIN;
		}
		public function setSENHA($SENHA){
			$this->SENHA=$SENHA;
		}
		public function setID($ID){
			$this->ID=$ID;
		}
		public function setCEP($CEP){
			$this->CEP=$CEP;
		}
		public function setRUA($RUA){
			$this->RUA=$RUA;
		}
		public function setBAIRRO($BAIRRO){
			$this->BAIRRO=$BAIRRO;
		}
		public function setCELULAR($CELULAR){
			$this->CELULAR=$CELULAR;
		}
		public function setEMAIL($EMAIL){
			$this->EMAIL=$EMAIL;
		}
		public function setNUMERO($NUMERO){
			$this->NUMERO=$NUMERO;
		}
		
	}
?>