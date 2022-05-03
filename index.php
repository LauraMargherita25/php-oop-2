<!-- Dove faccio l'import dei file che mi servono -->
<?php

// users
include_once __DIR__  . '/users/registered.php';
include_once __DIR__  . '/users/unregisterd.php';

// cc
include_once __DIR__  . '/creditCard.php';

// order
include_once __DIR__  . '/order.php';

// products
include_once __DIR__  . '/products/food.php';
include_once __DIR__  . '/products/accessories.php';
include_once __DIR__  . '/products/healthCare.php';

    $utente1 = new Regitered('Pippo Baudo');
    var_dump($utente1->getDiscount());

    $myCard = new CreditCard('Pippo', '12367845092309', '01/2090');
    $myCard->isValid();
    var_dump($myCard->isValid());

    $myOrder = new Order('1029932837', 'Pippo Baudo', $myCard);
    var_dump($myOrder->checkOut());

    $prodotto1 = new Food('croccchette', 36.99, 'cane', 'secco');
    $prodotto1->setBrand('monge');
    // $prodotto1->setAge('junior');
    $prodotto1->getDiscontedPrice($utente1->getDiscount());
    var_dump($prodotto1);


   