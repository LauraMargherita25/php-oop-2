<?php
    include_once __DIR__  . '/user.php';
    class Regitered extends User {
        private $discount = 20;

        public function __construct($_name, $_surname, $_validCc, $_discount)
        {
            parent::__construct($_name, $_surname, $_validCc);
            $this->discount = $_discount;
        }
        
    }

    
?>