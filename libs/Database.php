<?php

    class Database{

        const HOST = "localhost";
        const USER = "root";
        const PASS = "";
        const NAME = "ArknightsTool";

        private static ?Database $database = null;
        private static $sqli = null;
        private static $que;

        private function __clone() {}
        
        /** 
         * Constructor para conectarme a la base de datos
         */
        private function __construct() {
            self::$sqli = new mysqli(self::HOST, self::USER, self::PASS, self::NAME);
            if (self::$sqli->connect_errno)	die("**Error de conexión con la base de datos.");
        } 

        /**
         * Patrón singleton para crear solo una instancia de la base de datos
         */
        public static function getDatabase():Database {
            if (self::$database == null){
                self::$database = new Database();
            }

            return self::$database;  
        }

        /**
         * Función que devuelve el resultado de la consulta pasada por parámetro
         */
        public static function sqlQuery(String $sql):bool {
            self::$que = self::$sqli->query($sql);

            if (is_object(self::$que)) {
                return (self::$que->num_rows > 0);
            } else {
                return (self::$sqli->affected_rows > 0);
            }
        }

        /**
         * Recibo el objeto de la consulta
         */
        public function getObject(String $class = "stdClass"):?object {
			return self::$que->fetch_object($class) ;
        }
        
        /**
         * Escapo la cadena para evitar fallos de seguridad
         */
        public function escape(String $cad):String	{
			return self::$sqli->real_escape_string($cad);
		}

        /**
         * Destructor para cerrar la conexión con la base de datos
         */
        public function __destruct(){
			self::$sqli->close();
		}
    }

?>