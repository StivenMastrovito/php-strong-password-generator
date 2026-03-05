<?php

session_start();
var_dump($_SESSION)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PASSWORD SALVATE</h1>
    <?php 
    foreach($_SESSION["password"] as $password){
    ?>
    <h2><?php echo $password ?></h2>
    <?php }; ?>

    <a href="./index.php">VAI INDIETRO</a>

</body>
</html>