<?php

    require_once "libs/Database.php";

    class Tag{

        private int $TagId;
        private String $TagName;

        public function getTagId():int {
            return $this->TagId;
        }
    
        public function getTagName():String {
            return $this->TagName;
        }
    
        public function setTagName(String $TagName) {
            $this->TagName = $TagName;
        }
    
        /**
         * Devuelve todos los tags de la base de datos
         */
        public static function allTags():array {
            $db = Database::getDatabase();
            $db->sqlQuery("SELECT * FROM Tag");

            $tagData = [];

            while ($obj = $db->getObject("Tag")) {
                array_push($data,[
                    "TagId"   =>  $obj->getTagId(),
                    "TagName" =>  $obj->getTagName(),
                ]);
            }

            return $tagData;
        }
    }

?>