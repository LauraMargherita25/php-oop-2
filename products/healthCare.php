<?php
    include_once __DIR__  . '/product.php';
    class Health_care extends Product {
        
        private $type;

        public function __construct($_name, $_price, $_pet, $_type)
        {
            parent::__construct($_name, $_price, $_pet);
            $this->type = $_type;
        }
    }
?>