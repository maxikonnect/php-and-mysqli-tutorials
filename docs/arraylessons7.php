<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array</title>
</head>
<body>
<?php
    $array = [
    "fish" => "Salmon",
    "bird" => "Eagle",
    "mammal" => "Elephant"
    ];

    print_r($array);
?>
<br>
<?php
    $array = array("foo", "bar", "hello", "world");
    var_dump($array);
?>


</body>
</html>