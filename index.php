<!-- Dove faccio l'import dei file che mi servono -->
<?php
// include_once __DIR__  . '/products/product.php';
include_once __DIR__  . '/products/food.php';
include_once __DIR__  . '/products/accessories.php';
include_once __DIR__  . '/products/healthCare.php';

// include_once __DIR__  . '/users/user.php';
include_once __DIR__  . '/users/registered.php';
include_once __DIR__  . '/users/unregisterd.php';

    $utente1 = new Regitered('Pippo Baudo');
    // $utente1->getDiscount();
    var_dump($utente1);

    $prodotto1 = new Food('croccchette', 36.99, 'cane', 'secco');
    $prodotto1->setBrand('monge');
    // $prodotto1->setAge('junior');
    $prodotto1->getDiscontedPrice($utente1->getDiscount());
    var_dump($prodotto1);


   