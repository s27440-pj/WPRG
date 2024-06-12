<?php

namespace Zadania6;
class Product {
    private string $name;
    private float $price;
    private int $quantity;

    public function __construct(string $name, int $price, int $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price) {
        $this->price = $price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity(int $quantity) {
        $this->quantity = $quantity;
    }

    public function __toString() {
        return "Product: " . $this->getName() . ", Price: " . $this->getPrice() . ", Quantity: " . $this->getQuantity();
    }

}