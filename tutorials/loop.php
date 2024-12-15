<?php

    $products = [
        ['name' => 'green tea', 'price'=> '30'],
        ['name' => 'green shell', 'price'=> '60'],
        ['name' => 'green pear', 'price'=> '80'],
        ['name' => 'turtle', 'price'=> '60']
    ];

    foreach($products as $product){
        echo $product['name'] . ' - ' . $product['price'];
        echo "<br>";
    }
?>