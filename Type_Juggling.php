<?php
$name = 'Rafael Macasio';
$candies = ['Chocolate','Toffee', 'Fundge',];
$stock = [true,false,true];

//Conditional statement to check if the overall store stock is fully stocked.
$all_in_stock = $stock[0] && $stock[1] && $stock[2];

if ($all_in_stock) {
    $store_status = "The store is fully stocked! Enjoy your visit.";
} else {
    $store_status = "Some candies are out of stock. Check the list below!";
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
        <h2>Welcome <?php echo $name; ?> </h2>
        <p><b>Status:</b> <?php echo $store_status; ?></p>
        <p>Candies Available:<br>
            <?php
//Loop here to print the values
            for ($i =0; $i<3; $i++) {
                if($stock[$i]){
                    echo $candies[$i] . " is <b>in stock</b><br>";
                } 
                else {
                    echo $candies[$i] . " is <b>not in stock</b><br>";
                }
            }
            ?>
            </p>

</body>
</html>
