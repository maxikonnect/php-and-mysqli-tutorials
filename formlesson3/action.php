<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<p>Your name is ". htmlspecialchars($_POST['name']) . "</p>";
        echo "<p> You are " . (int) $_POST['age'] . " years old";

    ?>
</body>
</html>