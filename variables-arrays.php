<?php
$name = 'Rafael Macasio';
$price = 5;
$nutrition = [
    'fat' => 16,
    'sugar' => 51,
    'salt' => 6.3,
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Variables</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1> The Candy Store </h1>
        <h2>Welcome <?php echo $name; ?> </h2>
        <p>The cost of your candy is
            $<?php echo $price; ?> per back.</p>
        <h2> Nutrition (per 100g)</h2>
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
</body>
</html>
