<!-- Qui definisco un tipo di prodotto  -->
<?php
    include_once __DIR__  . '/product.php';
    class Food extends Product {
        
        private $type;
        private $age;
        private $race;

        public function __construct($_name, $_price, $_pet, $_type)
        {
            parent::__construct($_name, $_price, $_pet);
            $this->type = $_type;
        }
        
        public function setAge($_age)
        {
            $this->age = $_age;
        }

        public function getAge()
        {
            $this->age;
        }

        public function setRace($_race)
        {
            $this->race = $_race;
        }

        public function getRace()
        {
            $this->race;
        }
    }
?>