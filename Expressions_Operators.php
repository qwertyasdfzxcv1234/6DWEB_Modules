<?php
$items = 3;
$cost = 5;
$subtotal = $cost *$items;
$tax = ($subtotal /100) * 20;
$total = $subtotal + $tax;

//conditional statement to apply a discount.

if ($subtotal > 10) {
    $discount = $subtotal * 0.05;
    $final_message = "5% Discount Applied!";
    $total = $total - $discount;
} else {
    $discount = 0;
    $final_message = "No discount applied. Spend over $10 for a deal!";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Variables</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1> The Candy Store </h1>
        <h2>Shopping cart</h2>
        <p>Items: <?= $items?> </p>
        <p>Cost per pack: <?= $cost?> </p>
        <p>Subtotal: <?= $subtotal?> </p>
        <p>Tax: <?= $tax?> </p>
        <p>Discount: <?= $discount ?> </p>
        <p>Total: **<?= $total?>** </p>
        <p><em><?= $final_message ?></em></p>


</body>
</html>
