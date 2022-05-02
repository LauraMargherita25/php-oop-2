<!-- Qui definisco un tipo di prodotto  -->
<?php
    include_once __DIR__  . '/product.php';
    class Accessories extends Product {
        
        private $type;
        private $color;

        public function __construct($_name, $_price, $_pet, $_type)
        {
            parent::__construct($_name, $_price, $_pet);
            $this->type = $_type;
        }
        
        public function setColor($_color)
        {
            $this->color = $_color;
        }

        public function getColor()
        {
            $this->color;
        }
    }
?>