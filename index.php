<!-- Dove faccio l'import dei file che mi servono -->
<?php
include_once __DIR__  . '/products/food.php';
include_once __DIR__  . '/products/product.php';

    $prodotto1 = new Food('croccchette', 16.99, 'cane');
    $prodotto1->setBrand('monge');
    var_dump($prodotto1);