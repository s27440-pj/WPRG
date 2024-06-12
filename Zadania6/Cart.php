<?php

namespace Zadania6;
include "Product.php";

class Cart {
    private $products;

    public function __construct() {
        $this->products = array();
    }

    private function searchProduct (Product $product) {
        foreach ($this->products as $key => $productInCart) {
            if ($productInCart->getName() === $product->getName()) {
                return $key;
            }
        }
        return null;
    }

    public function addProduct(Product $product) {
        if (($productInCartKey = $this->searchProduct($product)) !== null) {
            $productInCart = $this->products[$productInCartKey];
            $productInCart->setQuantity($productInCart->getQuantity() + $product->getQuantity());
            echo "Amount of product " . $product->getName() . " increased <br>";
        } else {
            $this->products[] = $product;
            echo "Product added to cart. <br>";
        }
    }

    public function removeProduct(Product $product) {
        if (($productInCartKey = $this->searchProduct($product)) !== null) {
            unset($this->products[$productInCartKey]);
            // Przebudowanie tablicy, aby klucze były ciągłe
            $this->products = array_values($this->products);
            echo "Product removed from cart. <br>";
        } else {
            echo "Product is not in cart <br>";
        }
    }

    public function getTotal() : float {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice() * $product->getQuantity();
        }
        return $total;
    }

    public function __toString() {
        if (empty($this->products)) {
            return "The cart is empty.";
        }

        $productsDetails = "";
        foreach ($this->products as $product) {
            $productsDetails .= $product->__toString() . "<br>";
        }
        $productsDetails .= "Total sum: " . $this->getTotal();
        return $productsDetails;
    }
}
