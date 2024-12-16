<?php

    $products = [
        ['name'=>'orange', 'price'=>  30],
        ['name'=>'pear', 'price'=>  40],
        ['name'=>'sugar', 'price'=>  10],
        ['name'=>'banana', 'price'=>  20],
        ['name'=>'tomato', 'price'=>  70]

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
    <div>
        <ul>
            
            <?php foreach($products as $product){ ?>
                <?php if($product['price'] > 30){ ?>
                    <li><?php echo $product['name'] ?></li>
                <?php } ?>
            <?php } ?> 
            
        </ul>
    </div>
</body>
</html>