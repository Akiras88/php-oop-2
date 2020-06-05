<?php
include_once __DIR__ . '/classes/Product.php';

$shoes1 = new Product('Shoes', 'ad56546sx', 10, 150, 42, 'Nike');
$shoes2 = new Product('Shoes', 'fg64532er', 13, 99, 38, 'Adidas');
$shoes3 = new Product('Shoes', 'xx564886e', 6, 75, 43, 'Asics');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><strong><?php echo $shoes1->product; ?></strong></li>
        <li>Brend: <?php echo $shoes1->brend; ?></li>
        <li>Price: <?php echo $shoes1->price; ?></li>
        <li>Size: <?php echo $shoes1->size; ?></li>
        <li>Discount:<?php echo $shoes1->calcDiscount(10); ?></li>
    </ul>
    <ul>
        <li><strong><?php echo $shoes2->product; ?></strong></li>
        <li>Brend: <?php echo $shoes2->brend; ?></li>
        <li>Price: <?php echo $shoes2->price; ?></li>
        <li>Size: <?php echo $shoes2->size; ?></li>
        <li>Discount:<?php echo $shoes2->calcDiscount(20); ?></li>
    </ul>
    <ul>
        <li><strong><?php echo $shoes3->product; ?></strong></li>
        <li>Brend: <?php echo $shoes3->brend; ?></li>
        <li>Price: <?php echo $shoes3->price; ?></li>
        <li>Size: <?php echo $shoes3->size; ?></li>
        <li>Discount:<?php echo $shoes3->calcDiscount(30); ?></li>
    </ul>
</body>
</html>
