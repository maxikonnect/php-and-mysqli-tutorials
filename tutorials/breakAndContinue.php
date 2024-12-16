<?php

    $products = [
        ['name'=>'orange', 'price'=>  30],
        ['name'=>'pear', 'price'=>  40],
        ['name'=>'sugar', 'price'=>  10],
        ['name'=>'banana', 'price'=>  20],
        ['name'=>'tomato', 'price'=>  70]

    ];

    //foreach($products as $product){
    //    if($product['name'] === 'sugar'){
    //        break;
    //    }
    //    echo $product['name'] ."<br />";
    //};

    foreach($products as $product){
        if($product['price'] > 20){
            continue;
        }
        echo $product['name'] . "<br />";
    }
?>