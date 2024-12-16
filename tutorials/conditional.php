<?php
    //$price = 20;
    //if($price < 10){
    //    echo 'the condition is met';
    //}else if($price < 20){
    //    echo 'elseif condition is met';
    //}
    //else{
    //    echo 'the condition is not met';
    //}


    

    //foreach($products as $product){
    //    if($product['price'] < 61){
    //        echo $product['name'] . "<br />";
    //    }
    //}
    $products = [
        ['name' => 'green tea', 'price'=> '30'],
        ['name' => 'green shell', 'price'=> '60'],
        ['name' => 'green pear', 'price'=> '80'],
        ['name' => 'turtle', 'price'=> '60']
    ];

    foreach($products as $product){
        if($product['price'] < 50 || $product['price'] > 60){
            echo $product['name'] . "<br>";
        }
    }

?>