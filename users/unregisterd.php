<?php
    include_once __DIR__  . '/user.php';
    class Unregitered extends User{
        

        public function __construct($_name)
        {
            parent::__construct($_name);
        }
    }

    
?>