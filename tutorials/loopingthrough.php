<?php

    $products = [
        ['name' => 'green tea', 'price'=> '30'],
        ['name' => 'green shell', 'price'=> '60'],
        ['name' => 'green pear', 'price'=> '80'],
        ['name' => 'turtle', 'price'=> '60']
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){ ?>
        <h3><?php echo $product['name']; ?></h3>
        <p>$ <?php echo $product['price']; ?></p>
        <?php }?>
    </ul>
</body>
</html>