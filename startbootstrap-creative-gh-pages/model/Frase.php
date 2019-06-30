<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Frase{
		//Atributos
		private $ADMINID;
 		private $ID;
 				
		//Métodos Getters e Setters
		public function getADMINID(){
			return $this->ADMINID;
		}
		public function getID(){
			return $this->ID;
		}
		
		public function setADMINID($ADMINID){
			$this->ADMINID=$ADMINID;
		}
		public function setID($ID){
			$this->ID=$ID;
		}
		
	}
?>