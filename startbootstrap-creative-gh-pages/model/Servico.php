<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Servico{
		//Atributos
		private $DATA;
 		private $HORA;
 		private $VALOR;
 		private $STATUS;
 		private $PRODUTO;
 		private $DESCRICAO;
 		private $PROBLEMA;
 		private $TECID;
 		private $CLIENTEID;
 		private $ID;
 				
		//Métodos Getters e Setters
		public function getDATA(){
			return $this->DATA;
		}
		public function getHORA(){
			return $this->HORA;
		}
		public function getVALOR(){
			return $this->VALOR;
		}
		public function getSTATUS(){
			return $this->STATUS;
		}
		public function getPRODUTO(){
			return $this->PRODUTO;
		}
		public function getDESCRICAO(){
			return $this->DESCRICAO;
		}
		public function getPROBLEMA(){
			return $this->PROBLEMA;
		}
		public function getTECID(){
			return $this->TECID;
		}
		public function getCLIENTEID(){
			return $this->CLIENTEID;
		}
		public function getID(){
			return $this->ID;
		}
		
		public function setDATA($DATA){
			$this->DATA=$DATA;
		}
		public function setHORA($HORA){
			$this->HORA=$HORA;
		}
		public function setVALOR($VALOR){
			$this->VALOR=$VALOR;
		}
		public function setSTATUS($STATUS){
			$this->STATUS=$STATUS;
		}
		public function setPRODUTO($PRODUTO){
			$this->PRODUTO=$PRODUTO;
		}
		public function setDESCRICAO($DESCRICAO){
			$this->DESCRICAO=$DESCRICAO;
		}
		public function setPROBLEMA($PROBLEMA){
			$this->PROBLEMA=$PROBLEMA;
		}
		public function setTECID($TECID){
			$this->TECID=$TECID;
		}
		public function setCLIENTEID($CLIENTEID){
			$this->CLIENTEID=$CLIENTEID;
		}
		public function setID($ID){
			$this->ID=$ID;
		}
		
	}
?>