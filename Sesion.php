<?php
	require_once "BaseDatos.php" ;
	require_once "GuiaClase.php" ;

	class Sesion {
		private $expire_time = 300 ;

		private static $instancia = null ;	

		public function __destroy() {
			$_SESSION[] = array() ;

			session_destroy() ;
		}

	
		public static function iniciarSesion(){
			if (is_null(self::$instancia)):
				self::$instancia = new Sesion() ;
			endif ;
			session_start() ;
			return self::$instancia ;
		}

		private function isLogged(){
			return !empty($_SESSION) ;
		}

		public function checkActiveSession(){
			if ($this->isLogged()):
					return true ;	
			else:
				return false ; 	  
			endif ;
		}

		public function doLogin($usr, $pwd){
			if ($this->isLogged()):
				 return true ;
			else :

				$db = BaseDatos::getInstancia() ;
				$sql = "SELECT * FROM guia WHERE email='$usr'AND password=MD5('$pwd');"; 

		
				if ($db->consulta($sql)):
					$usuario = $db->getObjeto() ;
				
					$_SESSION["time"] = time() ;
					$_SESSION["idGuia"] = $usuario->idGuia;

					return true ;

				endif ;

			endif ;

			return false ;
		}

		//
		public function redirect($url){
			if ($this->checkActiveSession()) header("Location: $url") ;
			else
				throw new Exception("Sesión no iniciada para el usuario") ;

			exit() ;
		}

		//
		public function close(){
			if ($this->checkActiveSession()) $this->__destroy() ;
		}
	}




















