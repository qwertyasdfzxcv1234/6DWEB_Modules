<?php
$name = 'Rafael Macasio';
$favorites = ['Chocolate','Toffee', 'Fundge',];
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
        <p>Your favorite types of candy are:</p>
            <?php
            //Loop statement to print favorite candies
            foreach ($favorites as $candy) {
                echo "<p>- " . $candy . "</p>";
            }
            ?>

</body>
</html>
