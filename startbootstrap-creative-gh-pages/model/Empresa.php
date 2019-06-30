<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Empresa{
		//Atributos
		private $CNPJ;
 		private $ID;
 		private $SLOGAN;
 		private $NOME;
 		private $CEP;
 		private $BAIRRO;
 		private $RUA;
 		private $NUMERO;
 		private $CELULAR;
 				
		//Métodos Getters e Setters
		public function getCNPJ(){
			return $this->CNPJ;
		}
		public function getID(){
			return $this->ID;
		}
		public function getSLOGAN(){
			return $this->SLOGAN;
		}
		public function getNOME(){
			return $this->NOME;
		}
		public function getCEP(){
			return $this->CEP;
		}
		public function getBAIRRO(){
			return $this->BAIRRO;
		}
		public function getRUA(){
			return $this->RUA;
		}
		public function getNUMERO(){
			return $this->NUMERO;
		}
		public function getCELULAR(){
			return $this->CELULAR;
		}
		
		public function setCNPJ($CNPJ){
			$this->CNPJ=$CNPJ;
		}
		public function setID($ID){
			$this->ID=$ID;
		}
		public function setSLOGAN($SLOGAN){
			$this->SLOGAN=$SLOGAN;
		}
		public function setNOME($NOME){
			$this->NOME=$NOME;
		}
		public function setCEP($CEP){
			$this->CEP=$CEP;
		}
		public function setBAIRRO($BAIRRO){
			$this->BAIRRO=$BAIRRO;
		}
		public function setRUA($RUA){
			$this->RUA=$RUA;
		}
		public function setNUMERO($NUMERO){
			$this->NUMERO=$NUMERO;
		}
		public function setCELULAR($CELULAR){
			$this->CELULAR=$CELULAR;
		}
		
	}
?>