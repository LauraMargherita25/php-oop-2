<!-- Qui definisco un qualsiasi tipo di utente -->
<?php
    class User {
        private $name;
        private $surname;
        private $validCc;

        public function __construct($_name, $_surname, $_validCc)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->validCc = $_validCc;
        }
        
    }

    
?>