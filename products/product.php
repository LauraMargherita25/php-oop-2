<!-- Qui definisco il prodotto in generale -->
<?php
    class Product {
        private $name;
        private $price;
        private $brand;
        private $pet;

        public function __construct($_name, $_price, $_pet)
        {
            $this->name = $_name;
            $this->price = $_price;
            $this->pet = $_pet;
        }
        
        public function setBrand($_brand)
        {
            $this->brand = $_brand;
        }

        public function getBrand()
        {
            $this->brand;
        }
    }

    // $prodotto1 = new Product('croccchette', 16.99, 'cane');
    // $prodotto1->setBrand('monge');
    // var_dump($prodotto1)
?>

