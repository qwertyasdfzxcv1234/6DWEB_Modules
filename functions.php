<?php
declare(strict_types=1);

$products = [
    "Toffee"   => [3.00, 12],
    "Mints"    => [1.50, 26],
    "Fudge"    => [2.75, 8],
    "Cake"     => [4.00, 5],
    "Lollipop" => [1.00, 22],
    "Cookies"  => [2.50, 6]
];

$tax_rate = 20;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $quantity): float {
    return $price * $quantity;
}

function get_tax_due(float $price, int $quantity, int $tax_rate = 0): float {
    $total_value = $price * $quantity;
    return $total_value * ($tax_rate / 100);

    
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Functions</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1> The Candy Store </h1>
<h2>STOCK CONTROL</h2>
<table>
    <tr>
    <th>PRODUCT</th>
    <th>STOCK</th>
    <th>RE-ORDER</th>
    <th>TOTAL VALUE</th>
    <th>TAX DUE</th>
    </tr>

    <?php
foreach ($products as $product_name => $data) {
    $price = $data[0];
    $stock = $data[1];

    echo "<tr>";
    echo "<td>". $product_name. "</td>";
    echo "<td>" . $stock."</td>";
    echo "<td>" . get_reorder_message($stock) . "</td>";
    echo "<td>₱" . number_format(get_total_value($price, $stock), 2) . "</td>";
    echo "<td>₱" . number_format(get_tax_due($price, $stock, $tax_rate), 2) . "</td>";
    echo "</tr>";
}
?>
  

</body>
</html>
