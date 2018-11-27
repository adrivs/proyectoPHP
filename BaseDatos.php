<?php
	class BaseDatos {

		private $dbHost = "sql204.epizy.com" ;
		private $dbUser = "epiz_23054259" ;
		private $dbPass = "akQEQcq9oxSti" ;
		private $dbName = "epiz_23054259_clover" ;

		private static $res ;
		private static $instancia = null ;
		private static $db ;

		private function __construct(){
			$this->conectar() ;
		}
	
		public function __destruct(){	
			//
			BaseDatos::$db->close() ;
		}

		public static function getInstancia(){
			if (is_null(self::$instancia)):
				self::$instancia = new BaseDatos() ;
			endif ;
			
			return self::$instancia ;
		}

		public function consulta($sql):bool{
			self::$res = self::$db->query($sql)  ;
			if (is_object(self::$res)) return (self::$res->num_rows > 0) ;
			else
				return (self::$db->affected_rows > 0) ;
		}

		public function getObjeto($class="StdClass"){
			return self::$res->fetch_object($class) ;
		}

		private function conectar(){
			self::$db = new mysqli($this->dbHost, 
								   $this->dbUser, 
								   $this->dbPass)
							or die("**Se ha producido un error en la conexión con el motor de bases de datos.") ;

			self::$db->select_db($this->dbName) ;

			self::$db->set_charset("utf8") ;
		}
	}





