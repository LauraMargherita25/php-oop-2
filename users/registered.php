 <?php
    include_once __DIR__  . '/user.php';
    class Regitered extends User {
        protected $discount = 20;

        public function __construct($_name)
        {
            parent::__construct($_name);
        }
    }

    
?>