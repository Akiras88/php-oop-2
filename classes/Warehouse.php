<?php
/*********************************************************
    Create and model classes to manage warehouse products*
 ********************************************************/


class Warehouse {
    public $product;
    public $s_number;
    public $quantity;
    public $price;
    // construct
    public function __construct($_product, $_s_number, $_quantity, $_price) {
        $this->product = $_product;
        $this->s_number = $_s_number;
        $this->quantity = $_quantity;
        $this->price = $_price;
    }
    public function print() {
        return $this->product;
    }
}

