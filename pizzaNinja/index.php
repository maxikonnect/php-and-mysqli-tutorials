<?php
    //connect to database
    include 'config.php';

    //FIRST STEP CONSTRICT QUERY
    //SELECT DATA FROM ALL COLUMNS IN PIZZAS
    //$sql = 'SELECT * FROM pizzas';
    $sql = 'SELECT  title, ingredients, id FROM pizzas ORDER BY create_at';

    //MAKE QUERY AND GET RESULT
    $result = mysqli_query($conn, $sql);

    //FETCH QUERY
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //free result from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

    //remove strings and change to array
    //explode(',', $pizza[0]['ingredients'])
?>

<!DOCTYPE html>
<html lang="en">

    <?php include 'header.php' ?>
        <h4>pizzas</h4>
        <div class="container">
            <div class="row">
                <?php foreach($pizzas as $pizza): ?>
                    <div class="col">
                        <div class="card">
                            <div class="card-content">
                                <h6><?php echo htmlspecialchars($pizza['title']) ?></h6>
                                <ul>
                                    <!-- INGREDIENTS WRITTEN IN COLUMN FORM -->
                                    <?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
                                        <li><?php echo htmlspecialchars($ing); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                    <!-- INGREDIENTS WRITTEN IN COMMA SEPARATED FORM -->
                                <!-- 
                                <div><?php echo htmlspecialchars($pizza['ingredients']) ?></div>
                                -->
                            </div>
                            <div class="card-action">
                                <a href="#">more info</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

                <?php if(count($pizzas) >= 3): ?>
				<p>There is more than 3 pizza</p>
			    <?php else: ?>
				<p>There are fewer than 3 pizzas</p>
			    <?php endif; ?>
            </div>
        </div>
    <?php include 'footer.php' ?> 
    </body>
</html>