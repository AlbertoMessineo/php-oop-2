<?php
require_once __DIR__ .'/categories.php';
require_once __DIR__ .'/product.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce per Cani & Gatti</title>
</head>
<body>
    <?php
     $gioco1 = new product ('pallina' , 'gioco');
    ?>
    <p><?php var_dump($gioco1) ?></p>
</body>
</html>