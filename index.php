<?php
include_once __DIR__ . '/classes/Product.php';

$shoes1 = new Product('Shoes', 'ad56546sx', 10, 150, 42, 'Nike');
$shoes2 = new Product('Shoes', 'fg64532er', 13, 99, 38, 'Adidas');
$shoes3 = new Product('Shoes', 'xx564886e', 6, 75, 43, 'Asics');
$shoes4 = new Product('Shoes', 'fdf343545', 20, 49, 45, 'Diadora');
$shoes5 = new Product('Shoes', 'sda342322', 2, 130, 38, 'Nike');
$shoes6 = new Product('Shoes', 'xxxs3333s', 10, 199, 41, 'New Balance');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <h1>Men's shoes</h1>
    <main class="Main">
        <div class="container">
            <img src="img/nike.png" alt="nike">
            <ul class="product">
                <?php $shoes1->printClass()?>
                <li>Discount: <?php echo $shoes1->calcDiscount(10); ?> Euro</li>
            </ul>
        </div>
        <div class="container">
            <img src="img/adidas.jpg" alt="adidas">
            <ul class="product">
                <?php $shoes2->printClass()?>
                <li>Discount: <?php echo $shoes2->calcDiscount(20); ?> Euro</li>
            </ul>
        </div>
        <div class="container">
            <img src="img/asics.webp" alt="asics">
            <ul class="product">
                <?php $shoes3->printClass()?>
                <li>Discount: <?php echo $shoes3->calcDiscount(10); ?> Euro</li>
            </ul>
        </div>
        <div class="container">
            <img src="img/diadora.jpg" alt="diadora">
            <ul class="product">
                <?php $shoes4->printClass()?>
                <li>Discount: <?php echo $shoes3->calcDiscount(25); ?> Euro</li>
            </ul>
        </div>
        <div class="container">
            <img src="img/nike2.jpg" alt="nike">
            <ul class="product">
                <?php $shoes5->printClass()?>
                <li>Discount: <?php echo $shoes3->calcDiscount(30); ?> Euro</li>
            </ul>
        </div>
        <div class="container">
            <img src="img/nb.jpg" alt="new balance">
            <ul class="product">
                <?php $shoes6->printClass()?>
                <li>Discount: <?php echo $shoes3->calcDiscount(10); ?> Euro</li>
            </ul>
        </div>
    </main>
</body>
</html>
