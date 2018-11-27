<?php
	require_once "BaseDatos.php" ;

	class Usuario {

		private $idGuia ;
		private $email ;
		private $nombre ;
		private $apellidos ;

		private function __construct() 
		{
		}

		public function __get($prop){
			return $this->$prop ;
		}

		public function setNombre($nom){ 
			$this->nombre = $nom ;
		}

		public function setApellidos($ape){ 
			$this->apellidos = $ape ;
		}

		public function setEmail($email){ 
			$this->email = $email ;
		}
	}








