<?php

include "Cart.php";

use Zadania6\Cart;
use Zadania6\Product;

$first_product = new Product("cap", 30.5, 2);
$second_product = new Product("scarf", 20.0, 1);
$third_product = new Product("top", 50.0, 1);

    $cart = new Cart();
    echo $cart . "<br>";
    $cart->addProduct($first_product);
    echo $cart . "<br>";
    $cart->addProduct($second_product);
    echo $cart . "<br>";
    $cart->addProduct($second_product);
    echo $cart . "<br>";
    $cart->addProduct($third_product);
    echo $cart . "<br>";
    $cart->removeProduct($first_product);
    echo $cart . "<br>";
    $cart->removeProduct($first_product);

?>
