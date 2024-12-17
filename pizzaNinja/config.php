<?php
     $conn = mysqli_connect('localhost', 'maxikonnect', 'audiomasta12z', 'ninja_pizza');

     //check connection
 
     if(!$conn){
         echo 'conection_error: ' .mysqli_connect_error();
     }else{
         echo 'connection successful';
     }


?>