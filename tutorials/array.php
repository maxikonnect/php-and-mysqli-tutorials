<?php
    $peopleOne = ['shaun', 'James', 'Henry'];

    $peopleTwo = array('ken', 'Chun-li');

    echo $peopleTwo[1] . "<br>";

    $peopleOne[1] = 'Sunita';

    $peopleOne[] = 'Carbida';

    array_push($peopleOne, 'Kama');

    echo count($peopleOne); 



    print_r($peopleOne);

    $a = [10, 20, 30];
    $b = [40, 50, 60];
    $c = array_merge($a, $b);
    print_r($c);


?>