<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="author" content="Abradu Frimpong">
        <meta name="description" content="php and mysqli practice exercise">
        <title>PHP AND MYSQL PRACTICE</title>
    </head>
    <body>
        <?php
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
            echo 'You are using Internet Explorer.<br />';
            }else{
            echo "You are not using Internet Explorer";
            }
        ?>
    </body>
</html>

