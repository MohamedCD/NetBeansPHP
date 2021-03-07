<?php

    require_once "objects/User.php";

	class Session{

        private const EXPIRE_TIME = 600;	
        
		private static $session = null;

		private ?int $time = null;

		private function __clone() {}
		private function __construct() {}

		/**
		 * Patrón singleton para iniciar la sesión
		 */
		public static function startSession():session {
			session_start();

			if (isset($_SESSION["session"])){
				self::$session = unserialize($_SESSION["session"]);
            } else {
				if (self::$session == null){
                    self::$session = new Session();
                }
            }
            
			return self::$session;
		}	

		/**
		 * Comprueba si el login del usuario se hace correctamente
		 */
		public function login(string $user, string $password):bool {
			if ($this->usuario = User::checkLogIn($user, $password)){
				$_SESSION["start"] = time();
				$_SESSION["session"] = serialize(self::$session);
            } 

			return $this->isLogged();
		}

		/**
		 * Comprueba si la sesión ha expirado por tiempo
		 */
		public function isExpired():bool {
			$tme_log = $_SESSION["start"];
			$tme_act = time();

			return ($tme_act - $tme_log) > self::EXPIRE_TIME;
		}

		/**
		 * Comprueba si la sesión esta logeada
		 */
		public function isLogged():bool {
			return !empty($_SESSION);
		}

		/**
		 * Redirige a la ruta que se le indique
		 */
		public function redirect(string $url) {
			header("location: $url");
			die();
		}

		/**
		 * Cierra y destruye la sesión
		 */
		public function close() { 
			$_SESSION = [];

            session_destroy();
		}

    }
?>