<?php

    require_once "libs/Database.php";

    class OpClass{

        private int $ClassId;
        private String $ClassName;

        public function getClassId():int {
            return $this->ClassId;
        }
    
        public function getClassName():String {
            return $this->ClassName;
        }
    
        public function setClassName(String $ClassName) {
            $this->ClassName = $ClassName;
        }
    
        /**
         * Devuelve un array con todas las filas de la tabla class
         */
        public static function allClasses():array {
            $db = Database::getDatabase();
            $db->sqlQuery("SELECT * FROM Class");

            $classData = [];

            while ($obj = $db->getObject("Class")) {
                array_push($classData,[
                    "ClassId"   =>  $obj->getClassId(),
                    "ClassName" =>  $obj->getClassName(),
                ]);
            }

            return $classData;
        }

        /**
         * Devuelve el nombre de la clase del operador pasado por id
         */
        public static function getClassById($OpId):array {
            $db = Database::getDatabase();
            $db->sqlQuery("SELECT ClassName FROM class C RIGHT JOIN operator O ON (C.ClassId = O.ClassId) WHERE O.OpId LIKE $OpId");

            $classData = [];

            while ($obj = $db->getObject("OpClass")) {
                array_push($classData,[
                    "ClassName" =>  $obj->getClassName(),
                ]);
            }

            return $classData;
        }

        
    }

?>