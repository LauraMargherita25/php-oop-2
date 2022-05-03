<!-- Qui definisco il prodotto in generale -->
<?php
    abstract class Product {
        protected $name;
        protected $price;
        protected $brand;
        protected $pet;

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

        public function getDiscontedPrice($_discount)
        {
            // $discountedPrice = $this->price - $_discount
            return $this->price -= $_discount * 20 / 100 ;
        }
    }

?>

