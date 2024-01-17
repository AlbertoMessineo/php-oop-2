<?php
require_once __DIR__ .'/categories.php';
require_once __DIR__ .'/product.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>E-commerce per Cani & Gatti</title>
</head>
<body>
    <h1>IT'S RAINING CATS AND DOGS</h1>
    <?php
     $gioco1 = new product ('pallina' , 'gioco' , 'cani', '10');
    ?>
    <p><?php var_dump($gioco1) ?></p>
</body>
</html>