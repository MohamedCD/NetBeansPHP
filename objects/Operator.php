<?php

    require_once "libs/Database.php";

    class Operator{

        private int $OpId;
        private int $Rarity;
        private String $OpName;
        private String $OpImg;
        private String $OpIcon;
        private String $Description;
        private String $Skill1;
        private ?String $Skill2;
        private ?String $Skill3;

        

        /**
         * Devuelve un array con todos los operadores de la base de datos
         */
        public static function allOperators():array {
            $db = Database::getDatabase();
            $db->sqlQuery("SELECT * FROM operator");

            $opData = [];

            while ($obj = $db->getObject("operator")) {
                array_push($opData,[
                    "OpId"   =>  $obj->getOpId(),
                    "Rarity" =>  $obj->getRarity(),
                    "OpName" =>  $obj->getOpName(),
                    "OpImg"  =>  $obj->getOpImg(),
                    "OpIcon" =>  $obj->getOpIcon(),
                    "Description" =>  $obj->getDescription(),
                    "Skill1" =>  $obj->getSkill1(),
                    "Skill2" =>  $obj->getSkill2(),
                    "Skill3" =>  $obj->getSkill3(),
                ]);
            }

            return $opData;
        }

        /**
         * Devuelve el operador por id pasada
         */
        public static function getOperatorById(int $OpId):array {
            $db = Database::getDatabase();
            $db->sqlQuery("SELECT * FROM operator WHERE OpId LIKE $OpId");

            $opData = [];

            while ($obj = $db->getObject("operator")) {
                array_push($opData,[
                    "OpId"   =>  $obj->getOpId(),
                    "Rarity" =>  $obj->getRarity(),
                    "OpName" =>  $obj->getOpName(),
                    "OpImg"  =>  $obj->getOpImg(),
                    "OpIcon" =>  $obj->getOpIcon(),
                    "Description" =>  $obj->getDescription(),
                    "Skill1" =>  $obj->getSkill1(),
                    "Skill2" =>  $obj->getSkill2(),
                    "Skill3" =>  $obj->getSkill3(),
                ]);
            }

            return $opData;
        }

        /**
         * Devuelve todos los operadores por rareza pasada
         */
        public static function getOperatorsByRarity(int $rarity):array {
            $db = Database::getDatabase();
            $db->sqlQuery("SELECT * FROM operator WHERE Rarity LIKE $rarity");

            $opData = [];

            while ($obj = $db->getObject("operator")) {
                array_push($opData,[
                    "OpId"   =>  $obj->getOpId(),
                    "Rarity" =>  $obj->getRarity(),
                    "OpName" =>  $obj->getOpName(),
                    "OpImg"  =>  $obj->getOpImg(),
                    "OpIcon" =>  $obj->getOpIcon(),
                    "Description" =>  $obj->getDescription(),
                    "Skill1" =>  $obj->getSkill1(),
                    "Skill2" =>  $obj->getSkill2(),
                    "Skill3" =>  $obj->getSkill3(),
                ]);
            }

            return $opData;
        }

        /**
         * Devulve un operador aleatorio
         */
        public static function getRandomOperator():array {
            $arrayOperators = [];

            $probability = rand(1, 100);

            if ($probability <= 2) {
                $arrayOperators = self::getOperatorsByRarity(6);
            } else if ($probability <= 10) {
                $arrayOperators = self::getOperatorsByRarity(5);
            } else if ($probability <= 60){
                $arrayOperators = self::getOperatorsByRarity(4);
            } else {
                $arrayOperators = self::getOperatorsByRarity(3);
            }

            $probability2 = rand(0, count($arrayOperators) - 1);

            return $arrayOperators[$probability2];

        }

        /**
         * Get the value of OpId
         */ 
        public function getOpId()
        {
                return $this->OpId;
        }

        /**
         * Get the value of Rarity
         */ 
        public function getRarity()
        {
                return $this->Rarity;
        }

        /**
         * Set the value of Rarity
         *
         * @return  self
         */ 
        public function setRarity($Rarity)
        {
                $this->Rarity = $Rarity;

                return $this;
        }

        /**
         * Get the value of OpName
         */ 
        public function getOpName()
        {
                return $this->OpName;
        }

        /**
         * Set the value of OpName
         *
         * @return  self
         */ 
        public function setOpName($OpName)
        {
                $this->OpName = $OpName;

                return $this;
        }

        /**
         * Get the value of OpImg
         */ 
        public function getOpImg()
        {
                return $this->OpImg;
        }

        /**
         * Set the value of OpImg
         *
         * @return  self
         */ 
        public function setOpImg($OpImg)
        {
                $this->OpImg = $OpImg;

                return $this;
        }

        /**
         * Get the value of OpIcon
         */ 
        public function getOpIcon()
        {
                return $this->OpIcon;
        }

        /**
         * Set the value of OpIcon
         *
         * @return  self
         */ 
        public function setOpIcon($OpIcon)
        {
                $this->OpIcon = $OpIcon;

                return $this;
        }

        /**
         * Get the value of Description
         */ 
        public function getDescription()
        {
                return $this->Description;
        }

        /**
         * Set the value of Description
         *
         * @return  self
         */ 
        public function setDescription($Description)
        {
                $this->Description = $Description;

                return $this;
        }

        /**
         * Get the value of Skill1
         */ 
        public function getSkill1()
        {
                return $this->Skill1;
        }

        /**
         * Set the value of Skill1
         *
         * @return  self
         */ 
        public function setSkill1($Skill1)
        {
                $this->Skill1 = $Skill1;

                return $this;
        }

        /**
         * Get the value of Skill2
         */ 
        public function getSkill2()
        {
                return $this->Skill2;
        }

        /**
         * Set the value of Skill2
         *
         * @return  self
         */ 
        public function setSkill2($Skill2)
        {
                $this->Skill2 = $Skill2;

                return $this;
        }

        /**
         * Get the value of Skill3
         */ 
        public function getSkill3()
        {
                return $this->Skill3;
        }

        /**
         * Set the value of Skill3
         *
         * @return  self
         */ 
        public function setSkill3($Skill3)
        {
                $this->Skill3 = $Skill3;

                return $this;
        }
    }

?>