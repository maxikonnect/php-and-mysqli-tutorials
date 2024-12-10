<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = array(1 => 'one', 2 => 'two', 3 => 'three');
        unset($a[2]);

        print_r($a);

    ?>
</body>
</html>