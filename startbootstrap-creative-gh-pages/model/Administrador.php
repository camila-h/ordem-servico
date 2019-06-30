<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Administrador{
		//Atributos
		private $NOME;
 		private $ID;
 		private $CELULAR;
 		private $EMAIL;
 		private $LOGIN;
 		private $SENHA;


 				
		//Métodos Getters e Setters


		public function getLOGIN(){
			return $this->LOGIN;
		}
		public function setLOGIN($LOGIN){
			$this->LOGIN = $LOGIN;
		}


		public function getSENHA(){
			return $this->SENHA;
		}
		public function setSENHA($SENHA){
			$this->SENHA = $SENHA;
		}

		public function getNOME(){
			return $this->NOME;
		}
		public function getID(){
			return $this->ID;
		}
		public function getCELULAR(){
			return $this->CELULAR;
		}
		public function getEMAIL(){
			return $this->EMAIL;
		}
		
		public function setNOME($NOME){
			$this->NOME=$NOME;
		}
		public function setID($ID){
			$this->ID=$ID;
		}
		public function setCELULAR($CELULAR){
			$this->CELULAR=$CELULAR;
		}
		public function setEMAIL($EMAIL){
			$this->EMAIL=$EMAIL;
		}
		
	}
?>