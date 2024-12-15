<?php

    $products = [
        ['name' => 'green tea', 'price'=> '30'],
        ['name' => 'green shell', 'price'=> '60'],
        ['name' => 'green pear', 'price'=> '80'],
        ['name' => 'turtle', 'price'=> '60']
    ];

    $i = 0;

    while($i < count($products)){
        echo $products[$i]['name'];
        echo '<br />';
        $i++;
    }

?>