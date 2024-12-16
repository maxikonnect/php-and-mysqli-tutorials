<?php
     function sayHello($name = 'Jude'){
        echo "Good Morning $name";
     }

     sayHello('Mark');

     function formatProduct($product){
        //echo "{$product['name']} costs \${$product['price']} to buy <br />";
        return "{$product['name']} costs \${$product['price']} to buy <br />";
     }
     $formatted = formatProduct(['name'=>'GoldStar', 'price'=>'20']);
    
     echo $formatted;

?>