<?php

    //$name = "Paul";

    //function sayHello(){
    //    global $name;
    //    $name = 'yoshi';
    //    echo "hello $name";
    //}

    //sayHello(); //outputs hello yoshi;
    //echo $name; //"yoshi"

    $name = 'mario';
    function sayHello(&$name){
        $name = 'wario';
        echo "bye $name";

    }

    sayHello($name); //bye wario
    echo $name;//wario

?>