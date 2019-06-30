<?php

	/* @Autor: Dalker Pinheiro
	   Atributos e métodos da classe */
	   
	class Foto{
		//Atributos
		private $IMG1;
 		private $IMG2;
 		private $IMG3;
 		private $IMG4;
 		private $IMG5;
 		private $IMG6;
 		private $IMG7;
 		private $ID;
 				
		//Métodos Getters e Setters
		public function getIMG1(){
			return $this->IMG1;
		}
		public function getIMG2(){
			return $this->IMG2;
		}
		public function getIMG3(){
			return $this->IMG3;
		}
		public function getIMG4(){
			return $this->IMG4;
		}
		public function getIMG5(){
			return $this->IMG5;
		}
		public function getIMG6(){
			return $this->IMG6;
		}
		public function getIMG7(){
			return $this->IMG7;
		}
		public function getID(){
			return $this->ID;
		}
		
		public function setIMG1($IMG1){
			$this->IMG1=$IMG1;
		}
		public function setIMG2($IMG2){
			$this->IMG2=$IMG2;
		}
		public function setIMG3($IMG3){
			$this->IMG3=$IMG3;
		}
		public function setIMG4($IMG4){
			$this->IMG4=$IMG4;
		}
		public function setIMG5($IMG5){
			$this->IMG5=$IMG5;
		}
		public function setIMG6($IMG6){
			$this->IMG6=$IMG6;
		}
		public function setIMG7($IMG7){
			$this->IMG7=$IMG7;
		}
		public function setID($ID){
			$this->ID=$ID;
		}
		
	}
?>