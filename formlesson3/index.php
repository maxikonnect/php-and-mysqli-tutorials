<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="author" content="Abradu Frimpong">
        <meta name="description" content="php and mysqli practice exercise">
        <title>PHP AND MYSQL PRACTICE</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    </head>
    <body>
        <section class="contact" id="contact">
            <h1 class="heading"><span>Your Contact</span></h1>
            <form action="action.php" method="post">
                <p>Name: <input type="text" name="name" placeholder="Enter your name" required</p>
                <p>Age: <input type="number" name="age" placeholder="Enter your age" required></p>
                <p><input type="submit" name="send" value="submit">
            </form>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
        <script>
            AOS.init({
                duration: 800,
                delay: 400
            });
        </script>
        
    </body>
</html>