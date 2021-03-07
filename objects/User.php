<?php

    require_once "libs/Database.php";

    class User{

        private int $UsId;
        private String $UsName;
        private String $Password;
        private String $Email;

        public function getUsId():int {
            return $this->UsId;
        }

        public function getUsName():String {
            return $this->UsName;
        }

        public function getPassword():String {
            return $this->Password;
        }

        public function getEmail():String {
            return $this->Email;
        }

        public function setUsName(String $UsName) {
            $this->UsName = $UsName;

            return $this;
        }

        public function setEmail(String $Email) {
            $this->Email = $Email;

            return $this;
        }

        public function setPassword(String $Password) {
            $this->Password = $Password;

            return $this;
        }

        /**
         * Devuelve todos los usuarios de la base de datos
         */
        public static function allUsers():array {
            $db = Database::getDatabase();
            $db->sqlQuery("SELECT * FROM user");

            $userData = [];

            while ($obj = $db->getObject("user")) {
                array_push($userData,[
                    "UsId"     =>  $obj->getUsId(),
                    "UsName"   =>  $obj->getUsName(),
                    "Password" =>  $obj->getPassword(),
                    "Email"    =>  $obj->getEmail(),
                ]);
            }

            return $userData;
        }

        /**
         * Comprueba si el usuario introducido en el login es válido
         */
        public static function checkLogIn($user, $password):?User {
            $db  = Database::getDatabase();
			$sql = "SELECT * FROM user WHERE email LIKE '$user' AND password LIKE '$password';";

            $db->sqlQuery($sql);

			return $db->getObject("User");
        }

        /**
         * Crea un usuario en la base de datos
         */
        public static function addUser($UsName, $Email, $Password) {
            $db = Database::getDatabase();
            $sql = "INSERT INTO user (UsName, Email, Password) VALUES ('$UsName', '$Email', '$Password');";
            $db->sqlQuery($sql);
        }

        /**
         * Edita un usuario de la base de datos
         */
        public static function updateUser($UsId, $UsName, $Email, $Password) {
            $db = Database::getDatabase();
            $sql = "UPDATE user SET UsName = '$UsName', Email = '$Email', Password = '$Password' WHERE UsId LIKE $UsId;";
            $db->sqlQuery($sql);
        }

        /**
         * Elimina a un usuario de la base de datos
         */
        public static function deleteUser($idUsu) {
            $db = Database::getDatabase();
            $sql = "DELETE FROM user WHERE UsId LIKE $idUsu;";
            $db->sqlQuery($sql);
        }

        /**
         * Devuelve usuario por id pasado
         */
        public static function getUserById(int $UsId):?User {
			$db  = Database::getDatabase();
			$db->sqlQuery("SELECT * FROM uuser WHERE UsId = $UsId;");
			
			return $db->getObject("User");
		}
    }

?>