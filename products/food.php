<!-- Qui definisco un tipo di prodotto  -->
<?php
    include_once __DIR__  . '/product.php';
    class Food extends Product {
        
        private $type;
        private $age;
        private $race;

        // public function __construct($_name, $_price, $_pet)
        // {
        //     $this->name = $_name;
        //     $this->price = $_price;
        //     $this->pet = $_pet;
        // }
        
        // public function setBrand($_brand)
        // {
        //     $this->brand = $_brand;
        // }

        // public function getBrand()
        // {
        //     $this->brand;
        // }
    }
?>