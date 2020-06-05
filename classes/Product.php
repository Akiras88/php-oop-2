<?php
include_once __DIR__ . '/Warehouse.php';
include_once __DIR__ . '/Site.php';

class Product extends Warehouse {
    use Site;
    public $size;
    public $brend;
    // construct
    public function __construct($_product, $_s_number, $_quantity, $_price,
    $_size, $_brend) {
        parent::__construct($_product, $_s_number, $_quantity, $_price);
        $this->size = $_size;
        $this->brend = $_brend;
    }
    public function calcDiscount($_perc) {
        $discount = $this->price * $_perc / 100;
        $price_discount = $this->price - $discount;
        return number_format($price_discount, 2);
    }
}