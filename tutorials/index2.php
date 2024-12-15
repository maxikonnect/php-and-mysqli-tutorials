<?php
    $name = "Maxi";
    $age = 30;

    define('Name', 'BugsBunny')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $name . ", you are " . $age . ".";

    ?>
    <div><?php echo Name; ?></div>
</body>
</html>
