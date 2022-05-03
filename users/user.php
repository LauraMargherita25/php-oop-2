<!-- Qui definisco un qualsiasi tipo di utente -->
<?php
    abstract class User {
        protected $name;
        protected $email;
        protected $discount = 0;

        public function __construct($_name)
        {
            $this->name = $_name;
        }

        public function getDiscount()
        {
           return $this->discount;
        }
        
    }

    
?>