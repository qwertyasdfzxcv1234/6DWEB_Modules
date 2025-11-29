<?php
$name = 'Rafael Macasio';
$candies = ['Chocolate','Toffee', 'Fundge',];
$stock = [true,false,true];
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
        <p>Candies Available:<br>
            <?php
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
