<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Tecnico{
		//Atributos
		private $SENHA;
 		private $LOGIN;
 		private $NOME;
 		private $ESPECIALIDADE;
 		private $ID;
 		private $EMAIL;
 		private $CELULAR;
 		private $EMPID;
 				
		//Métodos Getters e Setters
		public function getSENHA(){
			return $this->SENHA;
		}
		public function getLOGIN(){
			return $this->LOGIN;
		}
		public function getNOME(){
			return $this->NOME;
		}
		public function getESPECIALIDADE(){
			return $this->ESPECIALIDADE;
		}
		public function getID(){
			return $this->ID;
		}
		public function getEMAIL(){
			return $this->EMAIL;
		}
		public function getCELULAR(){
			return $this->CELULAR;
		}
		public function getEMPID(){
			return $this->EMPID;
		}
		
		public function setSENHA($SENHA){
			$this->SENHA=$SENHA;
		}
		public function setLOGIN($LOGIN){
			$this->LOGIN=$LOGIN;
		}
		public function setNOME($NOME){
			$this->NOME=$NOME;
		}
		public function setESPECIALIDADE($ESPECIALIDADE){
			$this->ESPECIALIDADE=$ESPECIALIDADE;
		}
		public function setID($ID){
			$this->ID=$ID;
		}
		public function setEMAIL($EMAIL){
			$this->EMAIL=$EMAIL;
		}
		public function setCELULAR($CELULAR){
			$this->CELULAR=$CELULAR;
		}
		public function setEMPID($EMPID){
			$this->EMPID=$EMPID;
		}
		
	}
?>