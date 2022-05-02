<!-- Dove faccio l'import dei file che mi servono -->
<?php
include_once __DIR__  . '/products/product.php';
include_once __DIR__  . '/products/food.php';
include_once __DIR__  . '/products/accessories.php';
include_once __DIR__  . '/products/healthCare.php';

    $prodotto1 = new Food('croccchette', 16.99, 'cane', 'secco');
    $prodotto1->setBrand('monge');
    // $prodotto1->setAge('junior');
    var_dump($prodotto1);